/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'ru' ]: { dictionary, getPluralForm } } = {"ru":{"dictionary":{"Open file manager":"Открыть менеджер файлов","Cannot determine a category for the uploaded file.":"Не удаётся определить категорию для загруженного файла.","Cannot access default workspace.":"Не удается получить доступ к рабочему пространству по умолчанию.","Edit image":"Редактировать изображение","Processing the edited image.":"Обработка отредактированного изображения.","Server failed to process the image.":"Серверу не удалось обработать изображение.","Failed to determine category of edited image.":"Не удалось определить категорию отредактированного изображения."},getPluralForm(n){return (n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<12 || n%100>14) ? 1 : n%10==0 || (n%10>=5 && n%10<=9) || (n%100>=11 && n%100<=14)? 2 : 3);}}};
e[ 'ru' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'ru' ].dictionary = Object.assign( e[ 'ru' ].dictionary, dictionary );
e[ 'ru' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );