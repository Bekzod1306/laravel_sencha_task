Ext.define('ModernApp.store.CategoryApi',{
    extend:'Ext.data.Store',
    alias:'store.categoryApi',
    proxy:{
        type:'ajax',
        url:'http://task.loc/api/category',
    },
    autoLoad:true,
});