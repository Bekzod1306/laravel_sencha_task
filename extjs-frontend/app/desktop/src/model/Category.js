Ext.define('ModernApp.model.Category', {
    
    extend: 'Ext.data.Model',
    idProperty:'Id',
    schema: {
        namespace: 'ModernApp.model'
    },
    fields: [
        
        { name: 'cat_type', type: 'string' },
        { name: 'cat_name', type: 'string' },
        { name: 'created_at', type: 'date' },
        
    ],
    
    validations: [{
        type: 'presence',
        field: 'cat_type'
    }]

});