/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


var GoogleTracker = SocialTracker.extend({
    
    _elem: {},
    name: 'google_data',
    _intervalObj: {},
    count: 0,
    delta: 0,
    
    init: function(elem) {
        this._super(this.name, 'getGoogle.php');
        
        var self = this;
        
        window.addEventListener(this.name, function(evt) {
            self.update(parseInt(evt.detail.data.google));
        }, false);
        
        this._elem = $(elem);
    },
    
    // evt.detail.data.google
    update: function(newNum) {
//        console.dir(this);
        
        // use the name to search for the last number and store it
        var oldNum = parseInt(this._elem.attr(this.name));
        
        // set the new number
        this._elem.attr(this.name, newNum);
        
        // get the abs(difference) of the new and old number
        this.delta = Math.abs(oldNum - newNum);
        
        console.log('old: ' + oldNum + ' - new: ' + newNum + ' = ' + this.delta);
        
        // if the numbers have a balance, calculate the interval (5000/delta)
        if(this.delta > 0) {
            var interval = Math.floor(10000/this.delta);
            console.log(interval)

            // set interval and reset count to 0
            this.count = 0;
            this.setTimer(interval, oldNum);
        }
        
    },
    
    setTimer: function(interval, oldNum) {
        var self = this;
        
        this._intervalObj = window.setInterval(function() {
            // set the text and increment the count
//            var num = parseInt(self._elem.attr(self.name));
            self.count++;
            var formattedNum = self.formatNumber(oldNum + self.count);
            self._elem.text(formattedNum);
            
            console.log('count: ' + self.count)
            console.log('delta: ' + self.delta)
            // if the (count === delta) destroy the interval and stop
            if(self.count === self.delta) {
                self.destroyTimer();
            }
        }, interval);
        
    },
    
    destroyTimer: function() {
        var self = this;
        window.clearInterval(self._intervalObj);
        this.count = 0;
    },
    
    formatNumber: function(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
});