activeTag();

selectTags = (newTags) => {
    let url = window.location.origin + window.location.pathname+'?';
    
    let search = location.search.substring(1);
    
    let tags = 'tag='+ newTags;
    let cat  = '';
    
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
        
    }
    activeTag();

    url += cat+tags;
    
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
    }
}