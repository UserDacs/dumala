/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'ko' ]: { dictionary, getPluralForm } } = {"ko":{"dictionary":{"Insert a soft break (a <code>&lt;br&gt;</code> element)":"줄 바꿈 삽입(<code>&lt;br&gt;</code> 요소)","Insert a hard break (a new paragraph)":"단락 바꿈 삽입(새 단락)"},getPluralForm(n){return 0;}}};
e[ 'ko' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'ko' ].dictionary = Object.assign( e[ 'ko' ].dictionary, dictionary );
e[ 'ko' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );
