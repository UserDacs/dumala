/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
/**
 * @module basic-styles/strikethrough/strikethroughui
 */
import { Plugin } from 'ckeditor5/src/core.js';
import { ButtonView, MenuBarMenuListItemButtonView } from 'ckeditor5/src/ui.js';
import { getButtonCreator } from '../utils.js';
import strikethroughIcon from '../../theme/icons/strikethrough.svg';
const STRIKETHROUGH = 'strikethrough';
/**
 * The strikethrough UI feature. It introduces the Strikethrough button.
 */
export default class StrikethroughUI extends Plugin {
    /**
     * @inheritDoc
     */
    static get pluginName() {
        return 'StrikethroughUI';
    }
    /**
     * @inheritDoc
     */
    init() {
        const editor = this.editor;
        const t = editor.locale.t;
        const createButton = getButtonCreator({
            editor,
            commandName: STRIKETHROUGH,
            plugin: this,
            icon: strikethroughIcon,
            keystroke: 'CTRL+SHIFT+X',
            label: t('Strikethrough')
        });
        // Add strikethrough button to feature components.
        editor.ui.componentFactory.add(STRIKETHROUGH, () => {
            const buttonView = createButton(ButtonView);
            const command = editor.commands.get(STRIKETHROUGH);
            buttonView.set({
                tooltip: true
            });
            // Bind button model to command.
            buttonView.bind('isOn').to(command, 'value');
            return buttonView;
        });
        editor.ui.componentFactory.add('menuBar:' + STRIKETHROUGH, () => {
            return createButton(MenuBarMenuListItemButtonView);
        });
    }
}
