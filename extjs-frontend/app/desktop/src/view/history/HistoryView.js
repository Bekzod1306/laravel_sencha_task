Ext.define('ModernApp.view.history.HistoryView',{
    extend: 'Ext.grid.Grid',
    xtype: 'historyview',
    cls: 'historyview',
    requires: ['Ext.grid.rowedit.Plugin'],
    controller: {type: 'historyviewcontroller'},
    viewModel: {type: 'historyviewmodel'},
    store: {type: 'historyApi'},
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
        {text:'Type',dataIndex:'cat_type',flex:1},
        {text:'Category',dataIndex:'cat_name',flex:1},
        {text:'Дата',dataIndex:'created_at',flex:1},
        {text:'Сумма',dataIndex:'sum',flex:1},
        {text:'Итого',dataIndex:'total',flex:1},
        {text:'Комментарий',dataIndex:'comments',flex:1},
    ],
});
