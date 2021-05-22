activeTag();

selectTags = (newTags) => {
    let { origin, pathname, search } = location
    let url = origin +pathname+'?';
    
    search = search.substring(1);
    
    let tags = 'tag='+ newTags;
    let cat  = '';
    let s    = '';
    
    if (search) {
        let searchToObject = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}')
        
        let exist = false; 
        if (searchToObject.tag) {
            exist = searchToObject.tag.includes(newTags)
        }

        let searchTag = searchToObject.tag ? `${searchToObject.tag},` : '';
        
        tags += ','+searchTag;
        if(exist) {
            tags = tags.replaceAll(`${newTags},`, '')
        }
    
        let searchCat = searchToObject.cat ? `${searchToObject.cat}&` : '';
        cat += searchCat ? 'cat='+ searchCat : '';
        
        s = searchToObject.s ? `&s=${searchToObject.s}` : '';
    }
    activeTag();

    url += cat+tags+s;
    
    // Rediect 
    window.location.href = url
}

function activeTag () {
    let search = location.search.substring(1);
    
    if (search) {
        let searchToObject = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}')
        
        if (searchToObject.tag) {
            let arrTags = searchToObject.tag.split(',')
                arrTags.length > 0 && arrTags.forEach(element => {
                    $(`#tag${element}`).addClass('active')            
                });
        }

        if(searchToObject.s) {
            $('#search-post').val(searchToObject.s)
        }
    }
}


var interval = 0
function getSearch() {
    let url = location.origin +location.pathname+'?';

    let value = $('#search-post').val()
    clearInterval(interval)
    interval = setTimeout(() => {
        
        // console.log(`${location.href}&s=${value}`)
        if(location.search) {
            let searchToObject = JSON.parse('{"' + decodeURI(location.search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}')
            console.log(searchToObject)
            let newSearchs = ''
            Object.keys(searchToObject).forEach(keys => {
                let newkeys = keys.replace('?','')

                if (keys === 's'){
                    newSearchs += `&${newkeys}=${value}`;
                } else {
                    newSearchs += `&${newkeys}=${searchToObject[keys]}`
                }
            })
            
            window.location.href = `${url}?${newSearchs}`;
        }
    
        window.location.href = `?s=${value}`;
    }, 550);
}