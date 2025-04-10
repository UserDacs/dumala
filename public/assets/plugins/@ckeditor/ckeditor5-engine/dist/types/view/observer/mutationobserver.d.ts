/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module engine/view/observer/mutationobserver
 */
import Observer from './observer.js';
import type DomConverter from '../domconverter.js';
import type Renderer from '../renderer.js';
import type View from '../view.js';
/**
 * Mutation observer's role is to watch for any DOM changes inside the editor that weren't
 * done by the editor's {@link module:engine/view/renderer~Renderer} itself and reverting these changes.
 *
 * It does this by observing all mutations in the DOM, marking related view elements as changed and calling
 * {@link module:engine/view/renderer~Renderer#render}. Because all mutated nodes are marked as
 * "to be rendered" and the {@link module:engine/view/renderer~Renderer#render `render()`} method is called,
 * all changes are reverted in the DOM (the DOM is synced with the editor's view structure).
 *
 * Note that this observer is attached by the {@link module:engine/view/view~View} and is available by default.
 */
export default class MutationObserver extends Observer {
    /**
     * Reference to the {@link module:engine/view/view~View#domConverter}.
     */
    readonly domConverter: DomConverter;
    /**
     * Reference to the {@link module:engine/view/view~View#_renderer}.
     */
    readonly renderer: Renderer;
    /**
     * Native mutation observer config.
     */
    private readonly _config;
    /**
     * Observed DOM elements.
     */
    private readonly _domElements;
    /**
     * Native mutation observer.
     */
    private _mutationObserver;
    /**
     * @inheritDoc
     */
    constructor(view: View);
    /**
     * Synchronously handles mutations and empties the queue.
     */
    flush(): void;
    /**
     * @inheritDoc
     */
    observe(domElement: HTMLElement): void;
    /**
     * @inheritDoc
     */
    stopObserving(domElement: HTMLElement): void;
    /**
     * @inheritDoc
     */
    enable(): void;
    /**
     * @inheritDoc
     */
    disable(): void;
    /**
     * @inheritDoc
     */
    destroy(): void;
    /**
     * Handles mutations. Mark view elements to sync and call render.
     *
     * @param domMutations Array of native mutations.
     */
    private _onMutations;
    /**
     * Checks if mutation was generated by the browser inserting bogus br on the end of the block element.
     * Such mutations are generated while pressing space or performing native spellchecker correction
     * on the end of the block element in Firefox browser.
     *
     * @param mutation Native mutation object.
     */
    private _isBogusBrMutation;
}
