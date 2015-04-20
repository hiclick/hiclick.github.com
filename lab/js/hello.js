/**
 * Created with JetBrains PhpStorm.
 * User: Christen
 * Date: 15-4-20
 * Time: 下午2:46
 * To change this template use File | Settings | File Templates.
 */
Ext.create('Ext.Panel', {
    renderTo     : Ext.get("main"),
    width        : 200,
    height       : 150,
    bodyPadding  : 5,
    title        : 'Hello World',
    html         : 'Hello <b>World</b>...'
});