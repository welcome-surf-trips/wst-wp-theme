
//Success BUTTON
(function() {
    tinymce.create('tinymce.plugins.success', {
        init : function(ed, url) {
            ed.addButton('success', {
                title : 'Success alert',
                image : url+'/buttons/success.png',
                onclick : function() {
                     ed.selection.setContent('[success]' + ed.selection.getContent() + '[/success]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('success', tinymce.plugins.success);
})();
//Info BUTTON
(function() {
    tinymce.create('tinymce.plugins.info', {
        init : function(ed, url) {
            ed.addButton('info', {
                title : 'Info alert',
                image : url+'/buttons/info.png',
                onclick : function() {
                     ed.selection.setContent('[info]' + ed.selection.getContent() + '[/info]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('info', tinymce.plugins.info);
})();
//Warning BUTTON
(function() {
    tinymce.create('tinymce.plugins.warning', {
        init : function(ed, url) {
            ed.addButton('warning', {
                title : 'Warning alert',
                image : url+'/buttons/warning.png',
                onclick : function() {
                     ed.selection.setContent('[warning]' + ed.selection.getContent() + '[/warning]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('warning', tinymce.plugins.warning);
})();
//Error BUTTON
(function() {
    tinymce.create('tinymce.plugins.error', {
        init : function(ed, url) {
            ed.addButton('error', {
                title : 'Error alert',
                image : url+'/buttons/error.png',
                onclick : function() {
                     ed.selection.setContent('[error]' + ed.selection.getContent() + '[/error]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('error', tinymce.plugins.error);
})();
//Quote BUTTON
(function() {
    tinymce.create('tinymce.plugins.quote', {
        init : function(ed, url) {
            ed.addButton('quote', {
                title : 'Quote Button',
                image : url+'/buttons/quote.png',
                onclick : function() {
                    ed.selection.setContent('[quote]' + ed.selection.getContent() + '[/quote]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('quote', tinymce.plugins.quote);
})();
//FB Like BUTTON
(function() {
    tinymce.create('tinymce.plugins.fblike', {
        init : function(ed, url) {
            ed.addButton('fblike', {
                title : 'Facebook like Button',
                image : url+'/buttons/fblike.png',
                onclick : function() {
                     ed.selection.setContent('[fblike]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('fblike', tinymce.plugins.fblike);
})();
//LIST 1 BUTTON
(function() {
    tinymce.create('tinymce.plugins.list1', {
        init : function(ed, url) {
            ed.addButton('list1', {
                title : 'List Style 1',
                image : url+'/buttons/list1.png',
                onclick : function() {
                     ed.selection.setContent('[list1]' + ed.selection.getContent() + '[/list1]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('list1', tinymce.plugins.list1);
})();
//LIST 2 BUTTON
(function() {
    tinymce.create('tinymce.plugins.list2', {
        init : function(ed, url) {
            ed.addButton('list2', {
                title : 'List Style 2',
                image : url+'/buttons/list2.png',
                onclick : function() {
                     ed.selection.setContent('[list2]' + ed.selection.getContent() + '[/list2]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('list2', tinymce.plugins.list2);
})();
//LIST 3 BUTTON
(function() {
    tinymce.create('tinymce.plugins.list3', {
        init : function(ed, url) {
            ed.addButton('list3', {
                title : 'List Style 3',
                image : url+'/buttons/list3.png',
                onclick : function() {
                     ed.selection.setContent('[list3]' + ed.selection.getContent() + '[/list3]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('list3', tinymce.plugins.list3);
})();
//LIST 4 BUTTON
(function() {
    tinymce.create('tinymce.plugins.list4', {
        init : function(ed, url) {
            ed.addButton('list4', {
                title : 'List Style 4',
                image : url+'/buttons/list4.png',
                onclick : function() {
                     ed.selection.setContent('[list4]' + ed.selection.getContent() + '[/list4]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('list4', tinymce.plugins.list4);
})();
//LIST 5 BUTTON
(function() {
    tinymce.create('tinymce.plugins.list5', {
        init : function(ed, url) {
            ed.addButton('list5', {
                title : 'List Style 5',
                image : url+'/buttons/list5.png',
                onclick : function() {
                     ed.selection.setContent('[list5]' + ed.selection.getContent() + '[/list5]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('list5', tinymce.plugins.list5);
})();
//YOUTUBE BUTTON
(function() {
    tinymce.create('tinymce.plugins.youtube', {
        init : function(ed, url) {
            ed.addButton('youtube', {
                title : 'Youtube Video',
                image : url+'/buttons/youtube.png',
                onclick : function() {
                     ed.selection.setContent('[youtube width="600" height="365" video_id=""]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('youtube', tinymce.plugins.youtube);
})();
//VIMEO BUTTON
(function() {
    tinymce.create('tinymce.plugins.vimeo', {
        init : function(ed, url) {
            ed.addButton('vimeo', {
                title : 'Vimeo Video',
                image : url+'/buttons/vimeo.png',
                onclick : function() {
                     ed.selection.setContent('[vimeo width="600" height="365" video_id=""]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('vimeo', tinymce.plugins.vimeo);
})();
//Column2 BUTTON
(function() {
    tinymce.create('tinymce.plugins.col2', {
        init : function(ed, url) {
            ed.addButton('col2', {
                title : '2 columns',
                image : url+'/buttons/col2.png',
                onclick : function() {
                     ed.selection.setContent('[col2]' + ed.selection.getContent() + '[/col2]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('col2', tinymce.plugins.col2);
})();
//Column3 BUTTON
(function() {
    tinymce.create('tinymce.plugins.col3', {
        init : function(ed, url) {
            ed.addButton('col3', {
                title : '3 columns',
                image : url+'/buttons/col3.png',
                onclick : function() {
                     ed.selection.setContent('[col3]' + ed.selection.getContent() + '[/col3]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('col3', tinymce.plugins.col3);
})();
//Column4 BUTTON
(function() {
    tinymce.create('tinymce.plugins.col4', {
        init : function(ed, url) {
            ed.addButton('col4', {
                title : '4 columns',
                image : url+'/buttons/col4.png',
                onclick : function() {
                     ed.selection.setContent('[col4]' + ed.selection.getContent() + '[/col4]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('col4', tinymce.plugins.col4);
})();
//Tabs BUTTON
(function() {
    tinymce.create('tinymce.plugins.tabs', {
        init : function(ed, url) {
            ed.addButton('tabs', {
                title : 'Tabs',
                image : url+'/buttons/tab.png',
                onclick : function() {
                     ed.selection.setContent('[tabs titles="Tab One"][tab]' + ed.selection.getContent() + '[/tab][/tabs]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('tabs', tinymce.plugins.tabs);
})();
//Toggle BUTTON
(function() {
    tinymce.create('tinymce.plugins.toggle', {
        init : function(ed, url) {
            ed.addButton('toggle', {
                title : 'Toggle',
                image : url+'/buttons/toggle.png',
                onclick : function() {
                     ed.selection.setContent('[toggle title="ToggleMe"]' + ed.selection.getContent() + '[/toggle]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('toggle', tinymce.plugins.toggle);
})();
//Custom Buttons BUTTON
(function() {
    tinymce.create('tinymce.plugins.button', {
				init : function(ed, url) {		
            ed.addButton('button', {
                title : 'Link Button',
                image : url+'/buttons/button.png',
                onclick : function() {
                     ed.selection.setContent('[button url="http://www.google.com" ]' + ed.selection.getContent() + '[/button]');  

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('button', tinymce.plugins.button);
})();

//Adsense BUTTON
(function() {
    tinymce.create('tinymce.plugins.adsense', {
        init : function(ed, url) {
            ed.addButton('adsense', {
                title : 'Adsense code',
                image : url+'/buttons/adsense.png',
                onclick : function() {
                     ed.selection.setContent('[adsense id="3637220125174754" slot="4668915978" width="480" height="60"]');

                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    tinymce.PluginManager.add('adsense', tinymce.plugins.adsense);
})();