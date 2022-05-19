Ext.define('ModernApp.view.category.CategoryViewModel', {
	extend: 'Ext.app.ViewModel',
	alias: 'viewmodel.categoryviewmodel',
	data: {
		name: 'ModernApp'
	}
});
// Ext.define('ModernApp.view.category.CategoryViewModel', {
//     extend: 'Ext.app.ViewModel',
//     alias: 'viewmodel.categoryviewmodel',
//     stores: {
//         CategoryListStore: {
//             model: 'ModernApp.model.category',
//             autoLoad: true,
//             autoSync: true,
//             proxy:{
// 				type:'ajax',
// 				url:'http://task.loc/api/category',
			
//                 writer: {
//                     type: 'json',
//                     dateFormat: 'd/m/Y',
//                     writeAllFields: true
//                 }
//             }
//         },
//         CategoryListPagingStore: {
//             model: 'ModernApp.model.category',
//             autoLoad: true,
//             pageSize: 5,
//             proxy:{
// 				type:'ajax',
// 				url:'http://task.loc/api/category',
// 			},
//         }

//     }
// });