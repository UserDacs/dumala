/**
 * @license Copyright (c) 2003-2024, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

( e => {
const { [ 'es' ]: { dictionary, getPluralForm } } = {"es":{"dictionary":{"Cancel":"Cancelar","Clear":"Borrar","Remove color":"Quitar color","Restore default":"Restaurar valores predeterminados","Save":"Guardar","Show more items":"Mostrar más elementos","%0 of %1":"%0 de %1","Cannot upload file:":"No se pudo cargar el archivo:","Rich Text Editor. Editing area: %0":"Editor de texto enriquecido. Área de edición: %0","Insert with file manager":"Insertar con administrador de archivos","Replace with file manager":"Reemplazar con administrador de archivos","Insert image with file manager":"Insertar imagen con administrador de archivos","Replace image with file manager":"Reemplazar imagen con administrador de archivos","File":"Archivo","With file manager":"Con el administrador de archivos","Toggle caption off":"Desactivar título","Toggle caption on":"Activar título","Content editing keystrokes":"Teclas de edición de contenido","These keyboard shortcuts allow for quick access to content editing features.":"Estos atajos de teclado permiten acceder rápidamente a las funciones de edición de contenido.","User interface and content navigation keystrokes":"Teclas de navegación de contenido e interfaz de usuario","Use the following keystrokes for more efficient navigation in the CKEditor 5 user interface.":"Utilice las siguientes combinaciones de teclas para una navegación más eficiente en la interfaz de usuario de CKEditor 5.","Close contextual balloons, dropdowns, and dialogs":"Cierra globos contextuales, menús desplegables y cuadros de diálogo","Open the accessibility help dialog":"Abre el cuadro de diálogo de ayuda de accesibilidad","Move focus between form fields (inputs, buttons, etc.)":"Mueve el foco entre campos de formulario (entradas, botones, etc.)","Move focus to the menu bar, navigate between menu bars":"Mover el foco a la barra de menú, navegar entre las barras de menú","Move focus to the toolbar, navigate between toolbars":"Mueve el foco a la barra de herramientas y navega entre barras de herramientas","Navigate through the toolbar or menu bar":"Navegar por la barra de herramientas o la barra de menú","Execute the currently focused button. Executing buttons that interact with the editor content moves the focus back to the content.":"Ejecutar el botón actualmente enfocado. Al ejecutar botones que interactúan con el contenido del editor, el foco vuelve al contenido.","Accept":"Aceptar"},getPluralForm(n){return n == 1 ? 0 : n != 0 && n % 1000000 == 0 ? 1 : 2;}}};
e[ 'es' ] ||= { dictionary: {}, getPluralForm: null };
e[ 'es' ].dictionary = Object.assign( e[ 'es' ].dictionary, dictionary );
e[ 'es' ].getPluralForm = getPluralForm;
} )( window.CKEDITOR_TRANSLATIONS ||= {} );