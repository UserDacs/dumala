/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module paragraph/paragraphbuttonui
 */
import { Plugin, icons } from '@ckeditor/ckeditor5-core';
import { ButtonView } from '@ckeditor/ckeditor5-ui';
import Paragraph from './paragraph.js';
/**
 * This plugin defines the `'paragraph'` button. It can be used together with
 * {@link module:heading/headingbuttonsui~HeadingButtonsUI} to replace the standard heading dropdown.
 *
 * This plugin is not loaded automatically by the {@link module:paragraph/paragraph~Paragraph} plugin. It must
 * be added manually.
 *
 * ```ts
 * ClassicEditor
 *   .create( {
 *     plugins: [ ..., Heading, Paragraph, HeadingButtonsUI, ParagraphButtonUI ]
 *     toolbar: [ 'paragraph', 'heading1', 'heading2', 'heading3' ]
 *   } )
 *   .then( ... )
 *   .catch( ... );
 * ```
 */
export default class ParagraphButtonUI extends Plugin {
    /**
     * @inheritDoc
     */
    static get requires() {
        return [Paragraph];
    }
    /**
     * @inheritDoc
     */
    init() {
        const editor = this.editor;
        const t = editor.t;
        editor.ui.componentFactory.add('paragraph', locale => {
            const view = new ButtonView(locale);
            const command = editor.commands.get('paragraph');
            view.label = t('Paragraph');
            view.icon = icons.paragraph;
            view.tooltip = true;
            view.isToggleable = true;
            view.bind('isEnabled').to(command);
            view.bind('isOn').to(command, 'value');
            view.on('execute', () => {
                editor.execute('paragraph');
            });
            return view;
        });
    }
}
