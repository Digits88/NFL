/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var TwitterTracker = SocialTracker.extend({
    
    init: function(elem) {
        
        this._super('twitter_data', 'get/output.json', elem);
        
        var self = this;
        
        window.addEventListener('twitter_data', function(evt) {
            self.update(parseInt(evt.detail.data.output.twitter));
        }, false);
        
    }
    
});