/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'de-ch' ]: { dictionary, getPluralForm } } = {"de-ch":{"dictionary":{"Insert table":"Tabelle einfügen","Header column":"Kopfspalte","Insert column left":"","Insert column right":"","Delete column":"Spalte löschen","Select column":"","Column":"Spalte","Header row":"Kopfspalte","Insert row below":"Zeile unten einfügen","Insert row above":"Zeile oben einfügen","Delete row":"Zeile löschen","Select row":"","Row":"Zeile","Merge cell up":"Zelle oben verbinden","Merge cell right":"Zele rechts verbinden","Merge cell down":"Zelle unten verbinden","Merge cell left":"Zelle links verbinden","Split cell vertically":"Zelle vertikal teilen","Split cell horizontally":"Zelle horizontal teilen","Merge cells":"Zellen verbinden","Table toolbar":"","Table properties":"","Cell properties":"","Border":"","Style":"","Width":"","Height":"","Color":"","Background":"","Padding":"","Dimensions":"","Table cell text alignment":"","Alignment":"","Horizontal text alignment toolbar":"","Vertical text alignment toolbar":"","Table alignment toolbar":"","None":"","Solid":"","Dotted":"","Dashed":"","Double":"","Groove":"","Ridge":"","Inset":"","Outset":"","Align cell text to the left":"","Align cell text to the center":"","Align cell text to the right":"","Justify cell text":"","Align cell text to the top":"","Align cell text to the middle":"","Align cell text to the bottom":"","Align table to the left":"","Center table":"","Align table to the right":"","The color is invalid. Try \"#FF0000\" or \"rgb(255,0,0)\" or \"red\".":"","The value is invalid. Try \"10px\" or \"2em\" or simply \"2\".":"","Color picker":"","Enter table caption":"","Keystrokes that can be used in a table cell":"","Move the selection to the next cell":"","Move the selection to the previous cell":"","Insert a new table row (when in the last cell of a table)":"","Navigate through the table":"","Table":""},getPluralForm(n){return (n != 1);}}};
e[ 'de-ch' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'de-ch' ].dictionary = Object.assign( e[ 'de-ch' ].dictionary, dictionary );
e[ 'de-ch' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );