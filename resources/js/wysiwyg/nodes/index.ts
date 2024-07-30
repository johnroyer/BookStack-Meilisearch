import {HeadingNode, QuoteNode} from '@lexical/rich-text';
import {CalloutNode} from './callout';
import {
    ElementNode,
    KlassConstructor,
    LexicalNode,
    LexicalNodeReplacement, NodeMutation,
    ParagraphNode
} from "lexical";
import {CustomParagraphNode} from "./custom-paragraph";
import {LinkNode} from "@lexical/link";
import {ImageNode} from "./image";
import {DetailsNode, SummaryNode} from "./details";
import {ListItemNode, ListNode} from "@lexical/list";
import {TableCellNode, TableNode, TableRowNode} from "@lexical/table";
import {CustomTableNode} from "./custom-table";
import {HorizontalRuleNode} from "./horizontal-rule";
import {CodeBlockNode} from "./code-block";
import {DiagramNode} from "./diagram";
import {EditorUiContext} from "../ui/framework/core";
import {MediaNode} from "./media";
import {CustomListItemNode} from "./custom-list-item";

/**
 * Load the nodes for lexical.
 */
export function getNodesForPageEditor(): (KlassConstructor<typeof LexicalNode> | LexicalNodeReplacement)[] {
    return [
        CalloutNode, // Todo - Create custom
        HeadingNode, // Todo - Create custom
        QuoteNode, // Todo - Create custom
        ListNode, // Todo - Create custom
        CustomListItemNode,
        CustomTableNode,
        TableRowNode,
        TableCellNode,
        ImageNode,
        HorizontalRuleNode,
        DetailsNode, SummaryNode,
        CodeBlockNode,
        DiagramNode,
        MediaNode,
        CustomParagraphNode,
        LinkNode,
        {
            replace: ParagraphNode,
            with: (node: ParagraphNode) => {
                return new CustomParagraphNode();
            }
        },
        {
            replace: TableNode,
            with(node: TableNode) {
                return new CustomTableNode();
            }
        },
        {
            replace: ListItemNode,
            with: (node: ListItemNode) => {
                return new CustomListItemNode(node.__value, node.__checked);
            }
        }
    ];
}

export function registerCommonNodeMutationListeners(context: EditorUiContext): void {
    const decorated = [ImageNode, CodeBlockNode, DiagramNode];

    const decorationDestroyListener = (mutations: Map<string, NodeMutation>): void => {
        for (let [nodeKey, mutation] of mutations) {
            if (mutation === "destroyed") {
                const decorator = context.manager.getDecoratorByNodeKey(nodeKey);
                if (decorator) {
                    decorator.destroy(context);
                }
            }
        }
    };

    for (let decoratedNode of decorated) {
        // Have to pass a unique function here since they are stored by lexical keyed on listener function.
        context.editor.registerMutationListener(decoratedNode, (mutations) => decorationDestroyListener(mutations));
    }
}

export type LexicalNodeMatcher = (node: LexicalNode|null|undefined) => boolean;
export type LexicalElementNodeCreator = () => ElementNode;