/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'kn' ]: { dictionary, getPluralForm } } = {"kn":{"dictionary":{"Paragraph":"ಪ್ಯಾರಾಗ್ರಾಫ್","Heading":"ಶೀರ್ಷಿಕೆ","Choose heading":"ಶೀರ್ಷಿಕೆ ಆಯ್ಕೆಮಾಡು","Heading 1":"ಶೀರ್ಷಿಕೆ 1","Heading 2":"ಶೀರ್ಷಿಕೆ 2","Heading 3":"ಶೀರ್ಷಿಕೆ 3","Heading 4":"","Heading 5":"","Heading 6":"","Type your title":"","Type or paste your content here.":""},getPluralForm(n){return (n > 1);}}};
e[ 'kn' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'kn' ].dictionary = Object.assign( e[ 'kn' ].dictionary, dictionary );
e[ 'kn' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );