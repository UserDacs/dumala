/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module editor-decoupled/decouplededitor
 */
import { Editor, type EditorConfig } from 'ckeditor5/src/core.js';
import DecoupledEditorUI from './decouplededitorui.js';
declare const DecoupledEditor_base: import("ckeditor5/src/utils.js").Mixed<typeof Editor, import("ckeditor5/src/core.js").ElementApi>;
/**
 * The decoupled editor implementation. It provides an inline editable and a toolbar. However, unlike other editors,
 * it does not render these components anywhere in the DOM unless configured.
 *
 * This type of an editor is dedicated to integrations which require a customized UI with an open
 * structure, allowing developers to specify the exact location of the interface.
 *
 * See the document editor {@glink examples/builds/document-editor demo} to learn about possible use cases
 * for the decoupled editor.
 *
 * In order to create a decoupled editor instance, use the static
 * {@link module:editor-decoupled/decouplededitor~DecoupledEditor.create `DecoupledEditor.create()`} method.
 *
 * Note that you will need to attach the editor toolbar and menu bar to your web page manually, in a desired place,
 * after the editor is initialized.
 */
export default class DecoupledEditor extends /* #__PURE__ */ DecoupledEditor_base {
    /**
     * @inheritDoc
     */
    readonly ui: DecoupledEditorUI;
    /**
     * Creates an instance of the decoupled editor.
     *
     * **Note:** Do not use the constructor to create editor instances. Use the static
     * {@link module:editor-decoupled/decouplededitor~DecoupledEditor.create `DecoupledEditor.create()`} method instead.
     *
     * @param sourceElementOrData The DOM element that will be the source for the created editor
     * (on which the editor will be initialized) or initial data for the editor. For more information see
     * {@link module:editor-balloon/ballooneditor~BalloonEditor.create `BalloonEditor.create()`}.
     * @param config The editor configuration.
     */
    protected constructor(sourceElementOrData: HTMLElement | string, config?: EditorConfig);
    /**
     * Destroys the editor instance, releasing all resources used by it.
     *
     * Updates the original editor element with the data if the
     * {@link module:core/editor/editorconfig~EditorConfig#updateSourceElementOnDestroy `updateSourceElementOnDestroy`}
     * configuration option is set to `true`.
     *
     * **Note**: The decoupled editor does not remove the toolbar and editable when destroyed. You can
     * do that yourself in the destruction chain:
     *
     * ```ts
     * editor.destroy()
     * 	.then( () => {
     * 		// Remove the toolbar from DOM.
     * 		editor.ui.view.toolbar.element.remove();
     *
     * 		// Remove the editable from DOM.
     * 		editor.ui.view.editable.element.remove();
     *
     * 		console.log( 'Editor was destroyed' );
     * 	} );
     * ```
     */
    destroy(): Promise<unknown>;
    /**
     * Creates a new decoupled editor instance.
     *
     * **Note:** remember that `DecoupledEditor` does not append the toolbar element to your web page, so you have to do it manually
     * after the editor has been initialized.
     *
     * There are two ways how the editor can be initialized.
     *
     * # Using an existing DOM element (and loading data from it)
     *
     * You can initialize the editor using an existing DOM element:
     *
     * ```ts
     * DecoupledEditor
     * 	.create( document.querySelector( '#editor' ) )
     * 	.then( editor => {
     * 		console.log( 'Editor was initialized', editor );
     *
     * 		// Append the toolbar to the <body> element.
     * 		document.body.appendChild( editor.ui.view.toolbar.element );
     * 	} )
     * 	.catch( err => {
     * 		console.error( err.stack );
     * 	} );
     * ```
     *
     * The element's content will be used as the editor data and the element will become the editable element.
     *
     * # Creating a detached editor
     *
     * Alternatively, you can initialize the editor by passing the initial data directly as a string.
     * In this case, you will have to manually append both the toolbar element and the editable element to your web page.
     *
     * ```ts
     * DecoupledEditor
     * 	.create( '<p>Hello world!</p>' )
     * 	.then( editor => {
     * 		console.log( 'Editor was initialized', editor );
     *
     * 		// Append the toolbar to the <body> element.
     * 		document.body.appendChild( editor.ui.view.toolbar.element );
     *
     * 		// Initial data was provided so the editor UI element needs to be added manually to the DOM.
     * 		document.body.appendChild( editor.ui.getEditableElement() );
     * 	} )
     * 	.catch( err => {
     * 		console.error( err.stack );
     * 	} );
     * ```
     *
     * This lets you dynamically append the editor to your web page whenever it is convenient for you. You may use this method if your
     * web page content is generated on the client side and the DOM structure is not ready at the moment when you initialize the editor.
     *
     * # Using an existing DOM element (and data provided in `config.initialData`)
     *
     * You can also mix these two ways by providing a DOM element to be used and passing the initial data through the configuration:
     *
     * ```ts
     * DecoupledEditor
     * 	.create( document.querySelector( '#editor' ), {
     * 		initialData: '<h2>Initial data</h2><p>Foo bar.</p>'
     * 	} )
     * 	.then( editor => {
     * 		console.log( 'Editor was initialized', editor );
     *
     * 		// Append the toolbar to the <body> element.
     * 		document.body.appendChild( editor.ui.view.toolbar.element );
     * 	} )
     * 	.catch( err => {
     * 		console.error( err.stack );
     * 	} );
     * ```
     *
     * This method can be used to initialize the editor on an existing element with the specified content in case if your integration
     * makes it difficult to set the content of the source element.
     *
     * Note that an error will be thrown if you pass the initial data both as the first parameter and also in the configuration.
     *
     * # Configuring the editor
     *
     * See the {@link module:core/editor/editorconfig~EditorConfig editor configuration documentation} to learn more about
     * customizing plugins, toolbar and more.
     *
     * @param sourceElementOrData The DOM element that will be the source for the created editor
     * or the editor's initial data.
     *
     * If a DOM element is passed, its content will be automatically loaded to the editor upon initialization.
     * The editor data will be set back to the original element once the editor is destroyed only if the
     * {@link module:core/editor/editorconfig~EditorConfig#updateSourceElementOnDestroy updateSourceElementOnDestroy}
     * option is set to `true`.
     *
     * If the initial data is passed, a detached editor will be created. In this case you need to insert it into the DOM manually.
     * It is available via
     * {@link module:editor-decoupled/decouplededitorui~DecoupledEditorUI#getEditableElement `editor.ui.getEditableElement()`}.
     *
     * @param config The editor configuration.
     * @returns A promise resolved once the editor is ready. The promise resolves with the created editor instance.
     */
    static create(sourceElementOrData: HTMLElement | string, config?: EditorConfig): Promise<DecoupledEditor>;
}
export {};