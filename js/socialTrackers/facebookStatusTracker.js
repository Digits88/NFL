/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//var FacebookStatusTracker = SocialTracker.extend({
//    
//    init: function(elem) {
//        
//        this._super('facebook_status_data', '../services/output.json', elem);
//        
//        var self = this;
//        
//        var once = true;
//        
//        $(window).on('facebook_status_data', function(evt, data) {
////            console.dir(data)
//            
//            if(once) {
//                var entries = data.output.facebook_statuses.entries;
//                
//                self.outputThree(entries);
//                
//                once = false;
//            }
//            
//        });
//        
////        window.addEventListener('facebook_status_data', function(evt) {
////            
////            // data: evt.detail.data.output.facebook_statuses
//////            console.log(evt.detail.data.output.facebook_statuses);
////            console.dir(evt.detail.data.output.facebook_statuses);
////            
////            self.outputThree(evt.detail.data.output.facebook_statuses);
////        }, false);
//        
//    },
//    
//    outputThree: function(entries) {
//        console.log("entreis coming next: ")
//        console.dir(entries)
////        $('#news').html(data);
//        var count = 0;
//        $('#news ul li').each(function(index) {
//            console.log("count: " + count);
//            count++;
//        });
//        
//        $('#news > li').each(function(idx) {
//            var entry = entries[idx];
//            
//            /*
//	            
//	            $(entry).each(function(idx) {
//	            	// content: entry[idx].content
//	            });
//	            
//	            
//	            CSS SELECTORS
//	            .post:first-child .img
//	            
//	            .post:nth-of-type[2] .img
//	            
//	            .post:last-child .img
//	            
//            */
//            
//            console.log('entry coming next at idx: ' + idx);
//            
////            var div = document.createElement('div');
//            
////            $(div).addClass('post').html(entry.content);
//            
////            var str = '<div class="post">' + entry.content + '</div>';
//
//            var content = entry.content;
//            
//            console.dir(data.entries[idx].content);
//            
//            var jImg = $(content).find('img');
//            var jAnchors =  $(content).find('a');
//            
//            var img = document.createElement('img');
//            img = jImg[0];
//            
//            $(jAnchors).each(function(idx) {
//                if($(jAnchors[idx]).find('img')) {
////                    $(jAnchors[idx]).remove();
//                }
//            });
//            
//            $(this).find('.post img').remove();
//            $(this).find('.post br').remove();
//            
//            var _img = $(img);
//            var width = _img.width();
//            var height = _img.height();
//            
//            
//            
////            $(this).html('<div class="imgContainer"></div>');
//            $(this).find('.imgContainer').html(img);
//            
//            var _img = $('.imgContainer img');
//            var width = _img.width();
//            var height = _img.height();
//            
//            _img.css({
//                top: '-5px',
//                left: '-25px'
////                top: 0 - (width / 2),
////                left: 0 - (height / 2)
//            });
//            
////            $(this).append(div);
//            
////            var str = '<div class="post">'  + entry.content +'</div>';
//            
////            var img = $(str).find(".img").remove();
////            var copy = $(str).text();
////            
////            
////            $(this).html(img);
////            $(this).append('<p class="feed_copy">' + copy + '</p>');
//
//            
//        });
//    }
//    
//});



var FacebookStatusTracker = SocialTracker.extend({
    init: function(elem) {
        this._super('facebook_status_data', '../services/output.json', elem);
        
        var self = this;
        
        var once = true;
        
        $(window).on('facebook_status_data', function(evt, data) {
            
            if(once) {
                var entries = data.output.facebook_statuses.entries;
                
                self.output(entries);
                
                once = false;
            }
            
        });
    },
    
    output: function(entries) {
        
        for(var i = 0, l = 3; i < l; i++) {
            
            var content = entries[i].content;
            var title = entries[i].title;
            
            var div = document.createElement('div');
            
            $(div).addClass('post').html(content);
            
            var img = this.pullImageFromContent(div);
            
            var anchorArr = this.pullAnchorsFromContent(div);
            
            console.dir(entries[i])
            
//            console.log('array anchor text');
//            console.dir(anchorTextArr);
            
            $(div).find('br').remove();
            
            var list = $('#news li');
            
            var $li = $(list[i]);
            
            var $imgContainer = $li.find('.imgContainer');
            
            $imgContainer.html(img);
            
            var words = $(div).text();
            
            var trimmedString = $.trim(words).substring(0, 100).split(' ').slice(0, -1).join(' ') + '... ';
            
            if(anchorArr.length > 0) {
                
                for(var s = 0; s < anchorArr.length; s++) {
                    var tmp = trimmedString;
                    trimmedString = trimmedString.replace(anchorArr[s].text, '<a href="' + anchorArr[s].link + '">' + anchorArr[s].text + '</a>');
                    console.log('replacing: ' + tmp + ' with: ' + trimmedString);
                }
                
            }
            
            $(div).html(trimmedString);
            
            $li.append(div);
            
        }
        
    },
    
    pullAnchorsFromContent: function(div) {
        var jAnchors = $(div).find('a');
        
        var anchorTextArr = new Array();
        
        for(var t = 0; t < jAnchors.length; t++) {

            var tmpText = $(jAnchors[t]).text();
            var tmpLink = $(jAnchors[t]).attr('href');
            if(tmpText.length > 0) {
                anchorTextArr.push({
                    text: tmpText,
                    link: tmpLink
                });
            }

        }
        
        return anchorTextArr;
        
    },
    
    pullImageFromContent: function(div) {
        var img = document.createElement('img');
        var jImg = $(div).find('img');
        return jImg[0];
    },
    
    countWords: function(s) {
        
        console.dir(s)
        
        s = s.replace(/(^\s*)|(\s*$)/gi,"");
        s = s.replace(/[ ]{2,}/gi," ");
        s = s.replace(/\n /,"\n");
        return s.split(' ').length;
    }
});