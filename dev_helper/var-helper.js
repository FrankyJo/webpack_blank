const file = document.querySelector('html');
const vars = {
    'site_url': 'Sitename.co.uk',
    'site_title': 'SiteName.co.uk',
    'site_text': 'SiteName.co.uk',
    'site_name': 'SiteName.co.uk'
}
let result = file.outerHTML;
for (var key in vars) {
    result = result.replaceAll(`{${key}}`, vars[key]);
}
file.innerHTML = result;