/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */
export default {"uk":{"dictionary":{"Yellow marker":"Жовтий маркер","Green marker":"Зелений маркер","Pink marker":"Рожевий маркер","Blue marker":"Синій маркер","Red pen":"Червоний маркер","Green pen":"Зелений маркер","Remove highlight":"Видалити виділення","Highlight":"Виділення","Text highlight toolbar":"Панель виділення тексту"},getPluralForm(n){return (n % 1 == 0 && n % 10 == 1 && n % 100 != 11 ? 0 : n % 1 == 0 && n % 10 >= 2 && n % 10 <= 4 && (n % 100 < 12 || n % 100 > 14) ? 1 : n % 1 == 0 && (n % 10 ==0 || (n % 10 >=5 && n % 10 <=9) || (n % 100 >=11 && n % 100 <=14 )) ? 2: 3);}}}