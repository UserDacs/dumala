/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module ui/inputnumber/inputnumberview
 */
import InputView from '../input/inputview.js';
import type { Locale } from '@ckeditor/ckeditor5-utils';
/**
 * The number input view class.
 */
export default class InputNumberView extends InputView {
    /**
     * The value of the `min` DOM attribute (the lowest accepted value) set on the {@link #element}.
     *
     * @observable
     * @default undefined
     */
    min: number | undefined;
    /**
     * The value of the `max` DOM attribute (the highest accepted value) set on the {@link #element}.
     *
     * @observable
     * @default undefined
     */
    max: number | undefined;
    /**
     * The value of the `step` DOM attribute set on the {@link #element}.
     *
     * @observable
     * @default undefined
     */
    step: number | undefined;
    /**
     * Creates an instance of the input number view.
     *
     * @param locale The {@link module:core/editor/editor~Editor#locale} instance.
     * @param options The options of the input.
     * @param options.min The value of the `min` DOM attribute (the lowest accepted value).
     * @param options.max The value of the `max` DOM attribute (the highest accepted value).
     * @param options.step The value of the `step` DOM attribute.
     */
    constructor(locale?: Locale, { min, max, step }?: {
        min?: number;
        max?: number;
        step?: number;
    });
}