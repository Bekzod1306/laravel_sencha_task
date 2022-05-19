Ext.define('ModernApp.view.category.CategoryView',{
    extend: 'Ext.grid.Grid',
    xtype: 'categoryview',
    plugins:{
        clicksToMoveEditor:1,
        autoCancel:false
    },
    cls: 'categoryview',
    requires: ['Ext.grid.rowedit.Plugin'],
    controller: {type: 'categoryviewcontroller'},
    viewModel: {type: 'categoryviewmodel'},
    store: {type: 'categoryApi'},
    grouped: true,
    groupFooter: {
        xtype: 'gridsummaryrow'
    },
    plugins: {
        rowedit: {
            autoConfirm: false
        }
    },
    columns:[
        {text:'Type',dataIndex:'cat_type',flex:1,editor:{xtype:'textfield',allowBlank:false}},
        {text:'Category',dataIndex:'cat_name',flex:1,editor:{xtype:'textfield',allowBlank:false}},
        
    ],
});

// Ext.define('ModernApp.view.category.CategoryView', {
//     extend: 'Ext.grid.Panel',
//     xtype: 'categoryview',

//     title: 'Category List',

//      requires: ['Ext.grid.rowedit.Plugin'],
// //     controller: {type: 'categoryviewcontroller'},
// //     viewModel: {type: 'categoryviewmodel'},
// //     store: {type: 'categoryApi'},
//     selType: 'rowmodel',
//     selModel:
//     {
//         mode: 'SINGLE'
//     },
//     viewConfig:
//     {
//         stripeRows: true
//     },
//     listeners: {
//         selectionchange: 'onSelectionChange'
//     },
    
//     store: {type: 'categoryApi'},
    
//     initComponent: function () {
//         Ext.apply(this,
//         {
//             plugins: [Ext.create('Ext.grid.plugin.RowEditing',
//             {
//                 clicksToEdit: 2
//             })],

//             columns: [{
//                 text: "Id",
//                 dataIndex: 'Id',
//                 width: 45
//             },
//             {text:'Type',dataIndex:'cat_type',flex:1,editor:{xtype:'textfield',allowBlank:false}},
//         {text:'Category',dataIndex:'cat_name',flex:1,editor:{xtype:'textfield',allowBlank:false}},
            
//             {
//                 xtype: 'datecolumn',
//                 header: "Date",
//                 width: 135,
//                 dataIndex: 'created_at',
//                 editor:
//                 {
//                     xtype: 'datefield',
//                     allowBlank: true
//                 },
//                 renderer: Ext.util.Format.dateRenderer('d/m/Y')
//             }],
//             tbar: [{
//                 text: 'Add Category',
//                 iconCls: 'fa-plus',
//                 handler: 'onAddClick'
//             }, {
//                 itemId: 'removeCategory',
//                 text: 'Remove Category',
//                 iconCls: 'fa-times',
//                 reference: 'btnRemoveCategory',
//                 handler: 'onRemoveClick',
//                 disabled: true
//             }]


//         });

//         this.callParent(arguments);
//     }
// });