/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module editor-multi-root/multirooteditoruiview
 */
import { EditorUIView, InlineEditableUIView, MenuBarView, ToolbarView } from 'ckeditor5/src/ui.js';
import type { Locale } from 'ckeditor5/src/utils.js';
import type { EditingView } from 'ckeditor5/src/engine.js';
/**
 * The multi-root editor UI view. It is a virtual view providing an inline
 * {@link module:editor-multi-root/multirooteditoruiview~MultiRootEditorUIView#editable} and a
 * {@link module:editor-multi-root/multirooteditoruiview~MultiRootEditorUIView#toolbar}, but without any
 * specific arrangement of the components in the DOM.
 *
 * See {@link module:editor-multi-root/multirooteditor~MultiRootEditor.create `MultiRootEditor.create()`}
 * to learn more about this view.
 */
export default class MultiRootEditorUIView extends EditorUIView {
    /**
     * The main toolbar of the multi-root editor UI.
     */
    readonly toolbar: ToolbarView;
    /**
     * Menu bar view instance.
     */
    readonly menuBarView: MenuBarView;
    /**
     * Editable elements used by the multi-root editor UI.
     */
    readonly editables: Record<string, InlineEditableUIView>;
    readonly editable: InlineEditableUIView;
    /**
     * The editing view instance this view is related to.
     */
    private readonly _editingView;
    /**
     * Creates an instance of the multi-root editor UI view.
     *
     * @param locale The {@link module:core/editor/editor~Editor#locale} instance.
     * @param editingView The editing view instance this view is related to.
     * @param editableNames Names for all editable views. For each name, one
     * {@link module:ui/editableui/inline/inlineeditableuiview~InlineEditableUIView `InlineEditableUIView`} instance will be initialized.
     * @param options Configuration options for the view instance.
     * @param options.editableElements The editable elements to be used, assigned to their names. If not specified, they will be
     * automatically created by {@link module:ui/editableui/inline/inlineeditableuiview~InlineEditableUIView `InlineEditableUIView`}
     * instances.
     * @param options.shouldToolbarGroupWhenFull When set to `true` enables automatic items grouping
     * in the main {@link module:editor-multi-root/multirooteditoruiview~MultiRootEditorUIView#toolbar toolbar}.
     * See {@link module:ui/toolbar/toolbarview~ToolbarOptions#shouldGroupWhenFull} to learn more.
     */
    constructor(locale: Locale, editingView: EditingView, editableNames: Array<string>, options?: {
        editableElements?: Record<string, HTMLElement>;
        shouldToolbarGroupWhenFull?: boolean;
    });
    /**
     * Creates an editable instance with given name and registers it in the editor UI view.
     *
     * If `editableElement` is provided, the editable instance will be created on top of it. Otherwise, the editor will create a new
     * DOM element and use it instead.
     *
     * @param editableName The name for the editable.
     * @param editableElement DOM element for which the editable should be created.
     * @returns The created editable instance.
     */
    createEditable(editableName: string, editableElement?: HTMLElement): InlineEditableUIView;
    /**
     * Destroys and removes the editable from the editor UI view.
     *
     * @param editableName The name of the editable that should be removed.
     */
    removeEditable(editableName: string): void;
    /**
     * @inheritDoc
     */
    render(): void;
}