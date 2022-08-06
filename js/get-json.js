const photos = 9; // 表示する枚数
const wordCount = 30; // キャプション表示文字数。区切らない場合は0

fetch('get-feed.php')
    .then(response => { return response.json() })
    .then(data => {
        let html = '';
        const json = data.media.data;
        console.log(json);
        const length = json.length < photos ? json.length : photos;

        for (let i = 0; i < length; i++) {
            const item = json[i];
            let caption = '';
            if(item.hasOwnProperty('caption')) {
                caption = wordCount == 0 ? item.caption : item.caption.substr(0, wordCount) + '…';
            } else {
                caption = '';
            }
            html += '<div class="col-4">' +
                '<a href="' + item.permalink + '" target="_blank" rel="noopener"><figure>' +
                '<img src="' + item.media_url + '" alt="">' +
                '<figcaption>' + caption + '</figcaption></figure></a></div>';
        }

        document.getElementById('instagram-feed').innerHTML = html;
    }).catch(error => {
    console.error('エラーが発生しました', error);
    document.getElementById('instagram-feed').innerHTML = 'データを取得できませんでした。しばらくしてからお試しください。';
});