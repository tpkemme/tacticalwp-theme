/* tinyMCE buttons
 *
 * This file adds button to the Visual Editor that allows shortcode
 * to be inserted
 */
 function makeid()
 {
     var text = "";
     var possible = "abcdefghijklmnopqrstuvwxyz";

     for( var i=0; i < 5; i++ )
         text += possible.charAt(Math.floor(Math.random() * possible.length));

     return text;
 }
(function() {
    tinymce.PluginManager.add('scbutton', function( editor, url ) {
      editor.addButton( 'scbutton', {
        text: tinyMCE_object.button_name,
        icon: false,
        type: 'menubutton',
        menu: [
        {
          text: 'Accordion',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Accordion Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'accordionId',
                  label: 'Id',
                  value: '',
                  tooltip : 'ID of the accordion.  Only necessary on first item.'
                },
                {
                  type   : 'listbox',
                  name   : 'accordionPosition',
                  label  : 'Position',
                  values : [
                      { text: 'First', value: 'first' },
                      { text: 'Middle', value: 'middle' },
                      { text: 'Last', value: 'last' }
                  ],
                  value : 'first',
                  tooltip : 'Position of this item in the accordion.  You need a first and a last item.'
                },
                {
                  type: 'textbox',
                  name: 'accordionTitle',
                  label: 'Title',
                  value: '',
                  tooltip: 'Title of this accordion item.',
                },
                {
                  type   : 'listbox',
                  name   : 'accordionType',
                  label  : 'Type',
                  values : [
                      { text: 'Default', value: 'default' },
                      { text: 'H1', value: 'h1' },
                      { text: 'H2', value: 'h2' },
                      { text: 'H3', value: 'h3' },
                      { text: 'H4', value: 'h4' },
                      { text: 'H5', value: 'h5' },
                      { text: 'H6', value: 'h6' }
                  ],
                  value : 'default',
                  tooltip : 'The type of the accordion title for this item.'
                },
                {
                  type   : 'listbox',
                  name   : 'accordionCloseAll',
                  label  : 'Close All',
                  values : [
                      { text: 'False', value: 'false' },
                      { text: 'True', value: 'true' }
                  ],
                  value : 'true',
                  tooltip : 'Whether all accordion items can be closed.  Only necessary on the first item.'
                },
                {
                  type   : 'listbox',
                  name   : 'accordionMultiExpand',
                  label  : 'Close All',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' }
                  ],
                  value : 'true',
                  tooltip : 'Whether multiple accordion items can be expanded at once.  Only necessary on the first item.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.accordionId !== '' ){
                  id = ' id="' + e.data.accordionId + '" ';
                }
                var position = '';
                if( e.data.accordionPosition !== '' && e.data.accordionPosition !== 'middle' ){
                  position = ' position="' + e.data.accordionPosition + '" ';
                }
                var title = '';
                if( e.data.accordionTitle !== '' ){
                  title = ' title="' + e.data.accordionTitle + '" ';
                }
                var type = '';
                if( e.data.accordionType !== '' && e.data.accordionType !== 'default' ){
                  type = ' type="' + e.data.accordionType + '" ';
                }
                var closeAll = '';
                if( e.data.accordionCloseAll !== '' && e.data.accordionCloseAll !== 'true' ){
                  closeAll = ' close-all="' + e.data.accordionCloseAll + '" ';
                }
                var multiExpand = '';
                if( e.data.accordionMultiExpand !== '' && e.data.accordionMultiExpand !== 'true' ){
                  multiExpand = ' multi-expand="' + e.data.accordionMultiExpand + '" ';
                }
                editor.insertContent( '[twp-accordion' + id + position + title + type + closeAll + multiExpand + '] ACCORDION CONTENT HERE [/twp-accordion]');
              }
            });
          }
        },
        {
          text: 'Accordion Menu',
          onclick: function() {
              editor.windowManager.open( {
                  title: 'Accordion Menu Shortcode',
                  body: [
                    {
                        type   : 'textbox',
                        name   : 'accordionMenuId',
                        label  : 'ID',
                        tooltip: 'The ID of the accordion menu.',
                        value  : ''
                    },
                    {
                        type   : 'textbox',
                        name   : 'accordionMenuMenu',
                        label  : 'Menu',
                        tooltip: 'The name or slug of the menu.',
                        value  : ''
                    },

                  ],
                  onsubmit: function( e ) {
                    var id = '';
                    if( e.data.accordionMenuId !== '' ){
                      id = ' id="' + e.data.accordionMenuId + '"';
                    }
                    var menu = '';
                    if( e.data.accordionMenuMenu !== '' ){
                      menu = ' menu="' + e.data.accordionMenuMenu + '"';
                    }
                    editor.insertContent( '[twp-accordion-menu' + id + ' ' + menu + ']');
                  }
              });
          },
        },
        {
          text: 'Badge',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Badge Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'badgeId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the badge.',
                },
                {
                  type   : 'listbox',
                  name   : 'badgeType',
                  label  : 'Type',
                  values : [
                      { text: 'Primary', value: 'primary' },
                      { text: 'Secondary', value: 'secondary' },
                      { text: 'Success', value: 'success' },
                      { text: 'Warning', value: 'warning' },
                      { text: 'Alert', value: 'alert' }
                  ],
                  value : 'primary',
                  tooltip : 'This controls the color of the badge'
                },
                {
                  type: 'textbox',
                  name: 'badgeContent',
                  label: 'Content',
                  value: '',
                  tooltip : 'The content of the badge.  Should be a single number or character.',
                },
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.badgeId !== '' ){
                  id = ' id="' + e.data.badgeId + '"';
                }
                var type = '';
                if( e.data.badgeType !== '' && e.data.badgeType !== 'primary' ){
                  type = ' type="' + e.data.badgeType + '"';
                }
                editor.insertContent( '[twp-badge' + id + ' ' + type + '] ' + e.data.badgeContent + ' [/twp-badge]');
              }
            });
          }
        },
        {
          text: 'Breadcrumbs',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Breadcrumbs Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'breadcrumbsId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the breadcrumbs.',
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.breadcrumbsId !== '' ){
                  id = ' id="' + e.data.breadcrumbsId + '"';
                }
                editor.insertContent( '[twp-breadcrumbs' + id + ']');
              }
            });
          }
        },
        {
          text: 'Button',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Button Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'buttonId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the button.',
                },
                {
                  type   : 'listbox',
                  name   : 'buttonType',
                  label  : 'Type',
                  values : [
                      { text: 'Primary', value: 'primary' },
                      { text: 'Hollow', value: 'hollow' },
                      { text: 'Success', value: 'success' },
                      { text: 'Warning', value: 'warning' },
                      { text: 'Alert', value: 'alert' }
                  ],
                  value : 'primary',
                  tooltip : 'This controls the color of the button.'
                },
                {
                  type   : 'listbox',
                  name   : 'buttonSize',
                  label  : 'Size',
                  values : [
                      { text: 'Tiny', value: 'tiny' },
                      { text: 'Small', value: 'small' },
                      { text: 'Default', value: 'default' },
                      { text: 'Large', value: 'large' },
                      { text: 'Expanded', value: 'expanded' }
                  ],
                  value : 'default',
                  tooltip : 'This controls the size of the button.'
                },
                {
                  type: 'textbox',
                  name: 'buttonContent',
                  label: 'Content',
                  value: '',
                  tooltip : 'The content of the button.',
                },
                {
                  type: 'textbox',
                  name: 'buttonToggle',
                  label: 'Toggle',
                  value: '',
                  tooltip : 'Optional toggle attribute.  Should be the id of the element being toggled.',
                },
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.buttonId !== '' ){
                  id = ' id="' + e.data.buttonId + '"';
                }
                var type = '';
                if( e.data.buttonType !== '' && e.data.buttonType !== 'primary' ){
                  type = ' type="' + e.data.buttonType + '"';
                }
                var size = '';
                if( e.data.buttonSize !== '' && e.data.buttonSize !== 'default' ){
                  size = ' size="' + e.data.buttonSize + '"';
                }
                var toggle = '';
                if( e.data.buttonToggle !== '' ){
                  toggle = ' toggle="' + e.data.buttonToggle + '"';
                }
                editor.insertContent( '[twp-button' + id + ' ' + type + ' ' + size +  ' ' + toggle + '] ' + e.data.buttonContent + ' [/twp-button]');
              }
            });
          }
        },
        {
          text: 'Callout',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Callout Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'calloutId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the callout.',
                },
                {
                  type   : 'listbox',
                  name   : 'calloutType',
                  label  : 'Type',
                  values : [
                      { text: 'Primary', value: 'primary' },
                      { text: 'Secondary', value: 'secondary' },
                      { text: 'Success', value: 'success' },
                      { text: 'Warning', value: 'warning' },
                      { text: 'Alert', value: 'alert' }
                  ],
                  value : 'primary',
                  tooltip : 'This controls the color of the callout.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.calloutId !== '' ){
                  id = ' id="' + e.data.calloutId + '"';
                }
                var type = '';
                if( e.data.calloutType !== '' && e.data.calloutType !== 'primary' ){
                  type = ' type="' + e.data.calloutType + '"';
                }
                editor.insertContent( '[twp-callout' + id + ' ' + type + '] CALLOUT CONTENT HERE [/twp-callout]');
              }
            });
          }
        },
        {
          text: 'Card',
          onclick: function() {
            editor.windowManager.open( {
              title: tinyMCE_object.button_title,
              body: [
                {
                  type   : 'textbox',
                  name   : 'cardId',
                  label  : 'ID',
                  tooltip: 'The id of the card.'
                },
                {
                  type   : 'listbox',
                  name   : 'cardType',
                  label  : 'Type',
                  values : [
                      { text: 'Primary', value: 'primary' },
                      { text: 'Secondary', value: 'secondary' },
                      { text: 'Success', value: 'success' },
                      { text: 'Warning', value: 'warning' },
                      { text: 'Alert', value: 'alert' }
                  ],
                  value : 'primary',
                  tooltip : 'This controls the color of the card.'
                },
                {
                  type   : 'listbox',
                  name   : 'cardCenter',
                  label  : 'Center',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' }
                  ],
                  value : 'false',
                  tooltip : 'This controls whether the card content is centered.'
                },
                {
                  type   : 'textbox',
                  name   : 'cardTitle',
                  label  : 'Title',
                  tooltip: 'The title of the card.  Leave blank for no title.'
                },
                {
                  type: 'textbox',
                  name: 'cardImg',
                  label: tinyMCE_object.image_title,
                  value: '',
                  classes: 'my_input_image',
                  tooltip: 'Leave blank for no image.'
                },
                {
                  type: 'button',
                  name: 'my_upload_button',
                  label: '',
                  text: tinyMCE_object.image_button_title,
                  classes: 'my_upload_button',
                },
                {
                  type: 'textbox',
                  name: 'cardHeight',
                  label: 'Height',
                  value: '',
                  tooltip: 'The height of the card.  Be sure to include units like px, em, %, etc.',
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.cardId !== '' ){
                  id = ' id="' + e.data.cardId + '"';
                }
                var type = '';
                if( e.data.cardType !== '' && e.data.cardType !== 'primary' ){
                  type = ' type="' + e.data.cardType + '"';
                }
                var center = '';
                if( e.data.cardCenter !== '' && e.data.cardCenter !== 'false' ){
                  center = ' center="' + e.data.cardCenter + '"';
                }
                var title = '';
                if( e.data.cardTitle !== ''){
                  title = ' title="' + e.data.cardTitle + '"';
                }
                var img = '';
                if( e.data.cardImg !== ''){
                  img = ' img="' + e.data.cardImg + '"';
                }
                var height = '';
                if( e.data.cardHeight !== ''){
                  height = ' height="' + e.data.cardHeight + '"';
                }
                editor.insertContent( '[twp-card' + id + ' ' + type + ' ' + center + ' ' + title + ' ' + img + ' ' + height + '] CARD CONTENT HERE [/twp-card]');
              }
            });
          }
        },
        {
          text: 'Drilldown Menu',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Drilldown Menu Shortcode',
              body: [
                {
                    type   : 'textbox',
                    name   : 'drilldownMenuId',
                    label  : 'ID',
                    tooltip: 'The ID of the drilldown menu.',
                    value  : ''
                },
                {
                    type   : 'textbox',
                    name   : 'drilldownMenuMenu',
                    label  : 'Menu',
                    tooltip: 'The name or slug of the menu.',
                    value  : ''
                },

              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.drilldownMenuId !== '' ){
                  id = ' id="' + e.data.drilldownMenuId + '"';
                }
                var menu = '';
                if( e.data.drilldownMenuMenu !== '' ){
                  menu = ' menu="' + e.data.drilldownMenuMenu + '"';
                }
                editor.insertContent( '[twp-drilldown-menu' + id + ' ' + menu + ']');
              }
            });
          }
        },
        {
          text: 'Dropdown Menu',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Dropdown Menu Shortcode',
              body: [
                {
                    type   : 'textbox',
                    name   : 'dropdownMenuId',
                    label  : 'ID',
                    tooltip: 'The ID of the dropdown menu.',
                    value  : ''
                },
                {
                    type   : 'textbox',
                    name   : 'dropdownMenuMenu',
                    label  : 'Menu',
                    tooltip: 'The name or slug of the menu.',
                    value  : ''
                },

              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.dropdownMenuId !== '' ){
                  id = ' id="' + e.data.dropdownMenuId + '"';
                }
                var menu = '';
                if( e.data.dropdownMenuMenu !== '' ){
                  menu = ' menu="' + e.data.dropdownMenuMenu + '"';
                }
                editor.insertContent( '[twp-dropdown-menu' + id + ' ' + menu + ']');
              }
            });
          }
        },
        {
          text: 'Dropdown Pane',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Dropdown Pane Shortcode',
              body: [
                {
                    type   : 'textbox',
                    name   : 'dropdownPaneId',
                    label  : 'ID',
                    tooltip: 'The ID of the dropdown pane.',
                    value  : ''
                },
                {
                    type   : 'textbox',
                    name   : 'dropdownPaneButton',
                    label  : 'Button',
                    tooltip: 'The content of the dropdown pane button.',
                    value  : ''
                },

              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.dropdownPaneId !== '' ){
                  id = ' id="' + e.data.dropdownPaneId + '"';
                }
                var button = '';
                if( e.data.dropdownPaneButton !== '' ){
                  button = ' button="' + e.data.dropdownPaneButton + '"';
                }
                editor.insertContent( '[twp-dropdown-pane' + id + ' ' + button + '] PANE CONTENT HERE [/twp-dropdown-pane]');
              }
            });
          }
        },
        {
          text: 'Label',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Label Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'labelId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the label.',
                },
                {
                  type   : 'listbox',
                  name   : 'labelType',
                  label  : 'Type',
                  values : [
                      { text: 'Primary', value: 'primary' },
                      { text: 'Secondary', value: 'secondary' },
                      { text: 'Success', value: 'success' },
                      { text: 'Warning', value: 'warning' },
                      { text: 'Alert', value: 'alert' }
                  ],
                  value : 'primary',
                  tooltip : 'This controls the color of the label'
                },
                {
                  type: 'textbox',
                  name: 'labelContent',
                  label: 'Content',
                  value: '',
                  tooltip : 'The content of the label.  Should be a single number or character.',
                },
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.labelId !== '' ){
                  id = ' id="' + e.data.labelId + '"';
                }
                var type = '';
                if( e.data.labelType !== '' && e.data.labelType !== 'primary' ){
                  type = ' type="' + e.data.labelType + '"';
                }
                editor.insertContent( '[twp-label' + id + ' ' + type + '] ' + e.data.labelContent + ' [/twp-label]');
              }
            });
          }
        },
        {
          text: 'Modal',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Modal Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'modalId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the modal.',
                },
                {
                  type   : 'listbox',
                  name   : 'modalType',
                  label  : 'Type',
                  values : [
                      { text: 'Button', value: 'button' },
                      { text: 'Link', value: 'link' }
                  ],
                  value : 'button',
                  tooltip : 'Either a button or a link to open the modal.'
                },
                {
                  type: 'textbox',
                  name: 'modalRevealText',
                  label: 'Reveal Text',
                  value: '',
                  tooltip : 'The content of the link or button that opens the modal.',
                },
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.modalId !== '' ){
                  id = ' id="' + e.data.modalId + '"';
                }
                var type = '';
                if( e.data.modalType !== '' && e.data.modalType !== 'primary' ){
                  type = ' type="' + e.data.modalType + '"';
                }
                var revealText = '';
                if( e.data.modalRevealText !== '' && e.data.modalRevealText !== 'Open Modal' ){
                  revealText = 'reveal-text="' + e.data.modalRevealText + '"';
                }
                editor.insertContent( '[twp-modal' + id + ' ' + type + ' ' + revealText + '] MODAL CONTENT HERE [/twp-modal]');
              }
            });
          }
        },
        {
          text: 'Motion',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Modal Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'motionId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the motion.  If using a button to toggle, the button needs this id for its toggle attribute.',
                },
                {
                  type   : 'listbox',
                  name   : 'motionType',
                  label  : 'Type',
                  values : [
                      { text: 'Fade', value: 'fade' },
                      { text: 'Slide', value: 'slide' }
                  ],
                  value : 'fade',
                  tooltip : 'Either a fade or a slide motion.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.motionId !== '' ){
                  id = ' id="' + e.data.motionId + '"';
                }
                var type = '';
                if( e.data.motionType !== '' && e.data.motionType !== 'primary' ){
                  type = ' type="' + e.data.motionType + '"';
                }
                editor.insertContent( '[twp-motion' + id + ' ' + type + '] MOTION CONTENT HERE [/twp-motion]');
              }
            });
          }
        },
        {
          text: 'Progress Bar',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Progress Bar Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'progressBarId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the progress bar.',
                },
                {
                  type   : 'listbox',
                  name   : 'progressBarType',
                  label  : 'Type',
                  values : [
                      { text: 'Primary', value: 'primary' },
                      { text: 'Secondary', value: 'secondary' },
                      { text: 'Success', value: 'success' },
                      { text: 'Warning', value: 'warning' },
                      { text: 'Alert', value: 'alert' }
                  ],
                  value : 'primary',
                  tooltip : 'This controls the color of the label'
                },
                {
                  type: 'textbox',
                  name: 'progressBarSize',
                  label: 'Size',
                  value: '',
                  tooltip : 'How much of the progress bar is filled.  Should be a percent.',
                },
                {
                  type: 'textbox',
                  name: 'progressBarContent',
                  label: 'Content',
                  value: '',
                  tooltip : 'The text on the progress bar.',
                },
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.progressBarId !== '' ){
                  id = ' id="' + e.data.progressBarId + '"';
                }
                var type = '';
                if( e.data.progressBarType !== '' && e.data.progressBarType !== 'primary' ){
                  type = ' type="' + e.data.progressBarType + '"';
                }
                var size = '';
                if( e.data.progressBarSize !== '' && e.data.progressBarSize !== '50%' ){
                  size = ' size="' + e.data.progressBarSize + '"';
                }
                editor.insertContent( '[twp-progress-bar' + id + ' ' + type + ' ' + size + '] ' + e.data.progressBarContent + ' [/twp-progress-bar]');
              }
            });
          }
        },
        {
          text: 'Responsive Video',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Responsive Video Shortcode',
              body: [
                {
                  type   : 'textbox',
                  name   : 'videoId',
                  label  : 'Id',
                  tooltip: 'Id of the video.'
                },
                {
                  type: 'textbox',
                  name: 'videoUrl',
                  label: 'Video Url',
                  value: '',
                  classes: 'my_input_video',
                },
                {
                  type: 'button',
                  name: 'video_upload_button',
                  label: '',
                  text: 'Upload Video',
                  classes: 'video_upload_button',
                },
                {
                  type   : 'listbox',
                  name   : 'videoAutoplay',
                  label  : 'Autoplay',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' },
                  ],
                  value : 'false',
                  tooltip : 'Whether the video should start playing when the page loads.'
                },
                {
                  type   : 'listbox',
                  name   : 'videoLoop',
                  label  : 'Loop',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' },
                  ],
                  value : 'false',
                  tooltip : 'Whether the video should repeat after playing once.'
                },
                {
                  type   : 'listbox',
                  name   : 'videoMuted',
                  label  : 'Muted',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' },
                  ],
                  value : 'false',
                  tooltip : 'Whether the video should play without sound.'
                },
                {
                  type   : 'listbox',
                  name   : 'videoControls',
                  label  : 'Controls',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' }
                  ],
                  value : 'true',
                  tooltip : 'Whether the video controls should display.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.videoId !== '' ){
                  id = ' id="' + e.data.videoId + '"';
                }
                var url = '';
                if( e.data.videoUrl !== '' ){
                  url = ' url="' + e.data.videoUrl + '"';
                }
                var autoplay = '';
                if( e.data.videoAutoplay !== '' && e.data.videoAutoplay !== 'false' ){
                  autoplay = ' autoplay="' + e.data.videoAutoplay + '"';
                }
                var loop = '';
                if( e.data.videoLoop !== '' && e.data.videoLoop !== 'false' ){
                  loop = ' loop="' + e.data.videoLoop + '"';
                }
                var muted = '';
                if( e.data.videoMuted !== '' && e.data.videoMuted !== 'false' ){
                  muted = ' muted="' + e.data.videoMuted + '"';
                }
                var controls = '';
                if( e.data.videoControls !== '' && e.data.videoControls !== 'true' ){
                  controls = ' controls="' + e.data.videoControls + '"';
                }
                editor.insertContent( '[twp-video' + id + ' ' + url + ' ' + autoplay + ' ' + loop + ' ' + muted + ' ' + controls + ']');
              }
            });
          }
        },
        {
          text: 'Slider',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Slider Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'sliderId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the slider.',
                },
                {
                  type   : 'listbox',
                  name   : 'sliderType',
                  label  : 'Type',
                  values : [
                      { text: 'Horizontal', value: 'horizontal' },
                      { text: 'Vertical', value: 'vertical' }
                  ],
                  value : 'horizontal',
                  tooltip : 'This controls the orientation of the slider'
                },
                {
                  type: 'textbox',
                  name: 'sliderInitial',
                  label: 'Initial',
                  value: '',
                  tooltip : 'The slided\'s initial value.',
                },
                {
                  type: 'textbox',
                  name: 'sliderTotal',
                  label: 'Total',
                  value: '',
                  tooltip : 'The slider\'s total value.',
                },
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.sliderId !== '' ){
                  id = ' id="' + e.data.sliderId + '"';
                }
                var type = '';
                if( e.data.sliderType !== '' && e.data.sliderType !== 'horizontal' ){
                  type = ' type="' + e.data.sliderType + '"';
                }
                var initial = '';
                if( e.data.sliderInitial !== '' && e.data.sliderInitial !== '50' ){
                  initial = ' initial="' + e.data.sliderInitial + '"';
                }
                var total = '';
                if( e.data.sliderTotal !== '' && e.data.sliderTotal !== '100' ){
                  total = ' total="' + e.data.sliderTotal + '"';
                }
                editor.insertContent( '[twp-slider' + id + ' ' + type + ' ' + initial + ' ' + total + ']');
              }
            });
          }
        },
        {
          text: 'Switch',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Modal Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'switchId',
                  label: 'ID',
                  value: '',
                  tooltip : 'The id of the switch.',
                },
                {
                  type   : 'listbox',
                  name   : 'switchSize',
                  label  : 'Size',
                  values : [
                      { text: 'Tiny', value: 'tiny' },
                      { text: 'Small', value: 'small' },
                      { text: 'Normal', value: 'normal' },
                      { text: 'Large', value: 'large' }
                  ],
                  value : 'normal',
                  tooltip : 'The size of the switch.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.switchId !== '' ){
                  id = ' id="' + e.data.switchId + '"';
                }
                var size = '';
                if( e.data.switchSize !== '' && e.data.switchSize !== 'normal' ){
                  size = ' type="' + e.data.switchSize + '"';
                }
                editor.insertContent( '[twp-switch' + id + ' ' + size + ']');
              }
            });
          }
        },
        {
          text: 'Table',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Table Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'tableId',
                  label: 'Id',
                  value: '',
                  tooltip : 'ID of the table.  Only necessary on first item.'
                },
                {
                  type   : 'listbox',
                  name   : 'tablePosition',
                  label  : 'Position',
                  values : [
                      { text: 'First', value: 'first' },
                      { text: 'Middle', value: 'middle' },
                      { text: 'Last', value: 'last' }
                  ],
                  value : 'first',
                  tooltip : 'Position of the column in the table.  You need a first and a last column.'
                },
                {
                  type   : 'listbox',
                  name   : 'tableHeader',
                  label  : 'Header',
                  values : [
                      { text: 'False', value: 'false' },
                      { text: 'True', value: 'true' }
                  ],
                  value : 'false',
                  tooltip : 'Whether this table column is part of the table header.'
                },
                {
                  type   : 'listbox',
                  name   : 'tableFinal',
                  label  : 'Final',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' }
                  ],
                  value : 'false',
                  tooltip : 'Whether this is the final table object.  Should be true for the very last item.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.tableId !== '' ){
                  id = ' id="' + e.data.tableId + '" ';
                }
                var position = '';
                if( e.data.tablePosition !== '' && e.data.tablePosition !== 'middle' ){
                  position = ' position="' + e.data.tablePosition + '" ';
                }
                var header = '';
                if( e.data.tableHeader !== '' && e.data.tableHeader !== 'false' ){
                  header = ' header="' + e.data.tableHeader + '" ';
                }
                var final = '';
                if( e.data.tableFinal !== '' && e.data.tableFinal !== 'false' ){
                  final = ' multi-expand="' + e.data.tableFinal + '" ';
                }
                editor.insertContent( '[twp-table' + id + position + header + final + '] TABLE CONTENT HERE [/twp-table]');
              }
            });
          }
        },
        {
          text: 'Tabs',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Tabs Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'tabsId',
                  label: 'Id',
                  value: '',
                  tooltip : 'ID of the tab.  Id of the tab title and tab content need to match.'
                },
                {
                  type   : 'listbox',
                  name   : 'tabsPosition',
                  label  : 'Position',
                  values : [
                      { text: 'First', value: 'first' },
                      { text: 'Middle', value: 'middle' },
                      { text: 'Last', value: 'last' }
                  ],
                  value : 'first',
                  tooltip : 'Position of the column in the tabs.  You need a first and a last column.'
                },
                {
                  type   : 'listbox',
                  name   : 'tabsTitle',
                  label  : 'Title',
                  values : [
                      { text: 'False', value: 'false' },
                      { text: 'True', value: 'true' }
                  ],
                  value : 'false',
                  tooltip : 'Whether this is a tab title or tab content.'
                },
                {
                  type   : 'listbox',
                  name   : 'tabsSize',
                  label  : 'Size',
                  values : [
                      { text: 'Small', value: 'small' },
                      { text: 'Medium', value: 'medium' },
                      { text: 'Large', value: 'large' }
                  ],
                  value : 'medium',
                  tooltip : 'Size of the tabs.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.tabsId !== '' ){
                  id = ' id="' + e.data.tabsId + '" ';
                }
                var position = '';
                if( e.data.tabsPosition !== '' && e.data.tabsPosition !== 'middle' ){
                  position = ' position="' + e.data.tabsPosition + '" ';
                }
                var title = '';
                if( e.data.tabsTitle !== '' && e.data.tabsTitle !== 'false' ){
                  title = ' title="' + e.data.tabsTitle + '" ';
                }
                var size = '';
                if( e.data.tabsSize !== '' && e.data.tabsSize !== 'medium' ){
                  size = ' size="' + e.data.tabsSize + '" ';
                }
                if( e.data.tabsTitle === 'true' ){
                  editor.insertContent( '[twp-tabs' + id + position + title + size + '] TAB TITLE HERE [/twp-tabs]');
                }
                else{
                  editor.insertContent( '[twp-tabs' + id + position + title + size + '] TAB CONTENT HERE [/twp-tabs]');
                }
              }
            });
          }
        },
        {
          text: 'Testimonial',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Testimonial Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'testimonialId',
                  label: 'Id',
                  value: '',
                  tooltip : 'ID of the testimonial.'
                },
                {
                  type: 'listbox',
                  name: 'testimonialRating',
                  label: 'Rating',
                  values : [
                      { text: '1', value: '1' },
                      { text: '2', value: '2' },
                      { text: '3', value: '3' },
                      { text: '4', value: '4' },
                      { text: '5', value: '5' }
                  ],
                  value : '5',
                  tooltip : 'Rating out of 5.'
                },
                {
                  type: 'textbox',
                  name: 'testimonialImg',
                  label: 'Rating Image',
                  value: '',
                  classes: 'my_input_image',
                  tooltip : 'The image to use for the rating.  Default is a star.'
                },
                {
                  type: 'button',
                  name: 'my_upload_button',
                  label: '',
                  text: tinyMCE_object.image_button_title,
                  classes: 'my_upload_button',
                },
                {
                  type   : 'listbox',
                  name   : 'testimonialPosition',
                  label  : 'Position',
                  values : [
                      { text: 'First', value: 'first' },
                      { text: 'Middle', value: 'middle' },
                      { text: 'Last', value: 'last' }
                  ],
                  value : 'first',
                  tooltip : 'Position of the testimonial.  You need a first and a last testimonial.'
                },
                {
                  type   : 'listbox',
                  name   : 'testimonialButtons',
                  label  : 'Buttons',
                  values : [
                      { text: 'True', value: 'true' },
                      { text: 'False', value: 'false' }
                  ],
                  value : 'true',
                  tooltip : 'Whether to show the next and previous buttons.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.testimonialId !== '' ){
                  id = ' id="' + e.data.testimonialId + '" ';
                }
                var position = '';
                if( e.data.testimonialPosition !== '' && e.data.testimonialPosition !== 'middle' ){
                  position = ' position="' + e.data.testimonialPosition + '" ';
                }
                var rating = '';
                if( e.data.testimonialRating !== '' && e.data.testimonialRating !== '5' ){
                  rating = ' rating="' + e.data.testimonialRating + '" ';
                }
                var img = '';
                if( e.data.testimonialImg !== '' ){
                  img = ' img="' + e.data.testimonialImg + '" ';
                }
                var buttons = '';
                if( e.data.testimonialButtons !== '' && e.data.testimonialButtons !== 'true' ){
                  buttons = ' buttons="' + e.data.testimonialButtons + '" ';
                }
                editor.insertContent( '[twp-testimonial' + id + rating + img + position + buttons + '] TESTIMONIAL CONTENT HERE [/twp-testimonial]');
              }
            });
          }
        },
        {
          text: 'Thumbnail',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Thumbnail Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'thumbnailId',
                  label: 'Id',
                  value: '',
                  classes: 'The id of this thumbnail.',
                },
                {
                  type: 'textbox',
                  name: 'thumbnailImg',
                  label: tinyMCE_object.image_title,
                  value: '',
                  classes: 'my_input_image',
                },
                {
                  type: 'button',
                  name: 'my_upload_button',
                  label: '',
                  text: tinyMCE_object.image_button_title,
                  classes: 'my_upload_button',
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.thumbnailId !== '' ){
                  id = ' id="' + e.data.thumbnailId + '" ';
                }
                var img = '';
                if( e.data.thumbnailImg !== '' ){
                  img = ' url="' + e.data.thumbnailImg + '" ';
                }
                editor.insertContent( '[twp-thumbnail' + id + img + ']');
              }
            });
          }
        },
        {
          text: 'Toggler',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Toggler Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'togglerId',
                  label: 'Id',
                  value: '',
                  tooltip : 'ID of the tab.  The toggle attribute of a button needs to match this id.'
                },
                {
                  type   : 'listbox',
                  name   : 'togglerPosition',
                  label  : 'Position',
                  values : [
                      { text: 'First', value: 'first' },
                      { text: 'Middle', value: 'middle' },
                      { text: 'Last', value: 'last' }
                  ],
                  value : 'first',
                  tooltip : 'Position column to be toggled.  You need a first and a last column.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.togglerId !== '' ){
                  id = ' id="' + e.data.togglerId + '" ';
                }
                var position = '';
                if( e.data.togglerPosition !== '' && e.data.togglerPosition !== 'middle' ){
                  position = ' position="' + e.data.togglerPosition + '" ';
                }
                editor.insertContent( '[twp-toggle' + id + position + '] TOGGLE CONTENT HERE [/twp-toggle]');
              }
            });
          }
        },
        {
          text: 'Tooltip',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Tooltip Shortcode',
              body: [
                {
                  type: 'textbox',
                  name: 'tooltipId',
                  label: 'Id',
                  value: '',
                  tooltip : 'ID of the tab.  The tooltip attribute of a button needs to match this id.'
                },
                {
                  type: 'textbox',
                  name: 'tooltipTitle',
                  label: 'Title',
                  value: '',
                  tooltip : 'The content of the tooltip on hover.'
                },
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.tooltipId !== '' ){
                  id = ' id="' + e.data.tooltipId + '" ';
                }
                var title = '';
                if( e.data.tooltipTitle !== '' && e.data.tooltipTitle !== 'middle' ){
                  title = ' title="' + e.data.tooltipTitle + '" ';
                }
                editor.insertContent( '[twp-tooltip' + id + title + '] TOOLTIP HERE [/twp-tooltip]');
              }
            });
          }
        },
        {
          text: 'Visibility',
          onclick: function() {
            editor.windowManager.open( {
              title: 'Visibility Shortcode',
              body: [
                {
                  type   : 'textbox',
                  name   : 'visibilityId',
                  label  : 'Id',
                  tooltip: 'Id of the visibility.'
                },
                {
                  type   : 'listbox',
                  name   : 'visibilitySize',
                  label  : 'Screen Size',
                  values : [
                      { text: 'Medium or Wider', value: 'medium' },
                      { text: 'Larger or Wider', value: 'large' },
                      { text: 'Small Only', value: 'small-only' },
                      { text: 'Medium Only', value: 'medium-only' },
                      { text: 'Large Only', value: 'large-only' },
                      { text: 'XLarge Only', value: 'xlarge-only' },
                      { text: 'All Sizes', value: 'all' },
                  ],
                  value : 'medium',
                  tooltip : 'The size of the screen for this visibility.'
                },
                {
                  type   : 'listbox',
                  name   : 'visibilityOrientation',
                  label  : 'Display',
                  values : [
                      { text: 'Landscape', value: 'landscape' },
                      { text: 'Hide', value: 'hide' },
                  ],
                  value : 'landscape',
                  tooltip : 'The orientation of the screen for this visibility.'
                },
                {
                  type   : 'listbox',
                  name   : 'visibilityDisplay',
                  label  : 'Display',
                  values : [
                      { text: 'Show', value: 'show' },
                      { text: 'Hide', value: 'hide' },
                  ],
                  value : 'show',
                  tooltip : 'Whether to show or hide the content.'
                }
              ],
              onsubmit: function( e ) {
                var id = '';
                if( e.data.visibilityId !== '' ){
                  id = ' id="' + e.data.visibilityId + '"';
                }
                var size = '';
                if( e.data.visibilitySize !== '' ){
                  size = ' size="' + e.data.visibilitySize + '"';
                }
                var orientation = '';
                if( e.data.visibilityOrientation !== '' && e.data.visibilityOrientation !== 'landscape' ){
                  orientation = ' orientation="' + e.data.visibilityOrientation + '"';
                }
                var display = '';
                if( e.data.visibilityDisplay !== '' && e.data.visibilityDisplay !== 'true' ){
                  display = ' display="' + e.data.visibilityDisplay + '"';
                }
                editor.insertContent( '[twp-visibility' + id + ' ' + size + ' ' + orientation + ' ' + display + '] VISIBILITY CONTENT HERE [/twp-visibility]');
              }
            });
          }
        }]
      });
    });
})();

jQuery(document).ready(function($){
  $(document).on('click', '.mce-my_upload_button', upload_image_tinymce);
  $(document).on('click', '.mce-video_upload_button', upload_video_tinymce);

  function upload_image_tinymce(e) {
      e.preventDefault();
      var $input_field = $('.mce-my_input_image');
      var custom_uploader = wp.media.frames.file_frame = wp.media({
          title: 'Add Image',
          button: {
              text: 'Add Image'
          },
          multiple: false
      });
      custom_uploader.on('select', function() {
          var attachment = custom_uploader.state().get('selection').first().toJSON();
          $input_field.val(attachment.url);
      });
      custom_uploader.open();
  }
  function upload_video_tinymce(e) {
      e.preventDefault();
      var $input_field = $('.mce-my_input_video');
      var custom_uploader = wp.media.frames.file_frame = wp.media({
          title: 'Add Video',
          button: {
              text: 'Add Video'
          },
          multiple: false
      });
      custom_uploader.on('select', function() {
          var attachment = custom_uploader.state().get('selection').first().toJSON();
          $input_field.val(attachment.url);
      });
      custom_uploader.open();
  }
});
