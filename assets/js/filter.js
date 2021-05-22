activeTag();

selectTags = (newTags) => {
    let { origin, pathname, search } = location
    let url = origin +pathname+'?';
    
    search = search.substring(1);
    
    
    let newSearchs = ''
    if (search) {
        let searchToObject = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}')
        
        Object.keys(searchToObject).map(keys => {
            newSearchs = {...newSearchs, [keys.replace('?', '')]: searchToObject[keys]}
        })
        newSearchs = {...newSearchs, tag: filterTag({tag:searchToObject.tag, newTags})}

    } else {
        newSearchs = {...newSearchs, tag: newTags}
    }

    activeTag()

    // CONVERTER OBJETOS DOS FILTROS EM ARRAY;
    let arrSearchs = []
    Object.keys(newSearchs).map(keys => 
        newSearchs[keys].length > 0 && arrSearchs.push(`${keys.replace('?', '')}=${newSearchs[keys]}`)
    )
    
    // CONCATENA OS ARRAYS COM '&' para filtro do WP;
    arrSearchs = arrSearchs.join('&')    

    // Rediect 
    window.location.href = url + arrSearchs
}

function filterTag({tag,newTags}) {
    if(!tag) {
        return newTags
    }
    
    let arrTags = tag.split(',');
    
    if (tag.includes(newTags)) {
        if (arrTags.length > 0) {
            arrTags = arrTags.filter(tags => tags !== newTags)
        }
    } else {
        console.log(arrTags)
        arrTags.push(newTags)
    }
    
    arrTags = arrTags.join(',')
    
    return arrTags.length > 0 ? arrTags: ''
}

function filterCat ({cat}) {
    if(!cat) {
        return ''
    }
    return `cat=${cat}`
}

function activeTag () {
    let search = location.search.substring(1);
    
    if (search) {
        let searchToObject = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}')
        console.log(searchToObject)
        
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

    // ZERA O TEMPO EM QUE EXECUTA A FUNCAO PARA FAZER O FILTRO DO CAMPO DE #SEARCH-POST;
    clearInterval(interval)
    interval = setTimeout(() => {
        
        let newSearchs = ''
        if(location.search) {
            let searchToObject = JSON.parse('{"' + decodeURI(location.search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}')
            
            Object.keys(searchToObject).map(keys => {
                newSearchs = {...newSearchs, [keys.replace('?', '')]: searchToObject[keys]}
            })
            newSearchs = {...newSearchs, s: value}

        } else {
            newSearchs = {...newSearchs, s: value}
        }

        // CONVERTER OBJETOS DOS FILTROS EM ARRAY;
        let arrSearchs = []
        Object.keys(newSearchs).map(keys => 
            newSearchs[keys].length > 0  && arrSearchs.push(`${keys.replace('?', '')}=${newSearchs[keys]}`)
        )

        // CONCATENA OS ARRAYS COM '&' para filtro do WP;
        arrSearchs = arrSearchs.join('&')
        
        window.location.href = `${url}${arrSearchs}`;
    
    }, 1000);
}