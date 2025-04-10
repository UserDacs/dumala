/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'ja' ]: { dictionary, getPluralForm } } = {"ja":{"dictionary":{"Widget toolbar":"ウィジェットツールバー","Insert paragraph before block":"ブロックの前にパラグラフを挿入","Insert paragraph after block":"ブロックの後にパラグラフを挿入","Press Enter to type after or press Shift + Enter to type before the widget":"Enterを押してウィジェットの後に入力するか、Shift + Enterを押してウィジェットの前に入力してください","Keystrokes that can be used when a widget is selected (for example: image, table, etc.)":"ウィジェットが選択されている時に使用できるキーストローク（例：画像、テーブルなど）","Insert a new paragraph directly after a widget":"ウィジェットの直後に新しいパラグラフを挿入する","Insert a new paragraph directly before a widget":"ウィジェットの直前に新しいパラグラフを挿入する","Move the caret to allow typing directly before a widget":"キャレットを移動させて、ウィジェットの直前から入力できるようにする","Move the caret to allow typing directly after a widget":"キャレットを移動させて、ウィジェットの直後から入力できるようにする","Move focus from an editable area back to the parent widget":"編集可能エリアから親ウィジェットへフォーカスを戻す"},getPluralForm(n){return 0;}}};
e[ 'ja' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'ja' ].dictionary = Object.assign( e[ 'ja' ].dictionary, dictionary );
e[ 'ja' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
