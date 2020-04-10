---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_f047f50e472ddd34244da31b0e9f9b5a -->
## /api/v1/user/create
> Example request:

```bash
curl -X POST "/api/v1/user/create" 
```

```javascript
const url = new URL("/api/v1/user/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/user/create`


<!-- END_f047f50e472ddd34244da31b0e9f9b5a -->

<!-- START_661fe0a58dac95ae3ec7afe531a1712f -->
## /api/v1/user/edit/{user_id}
> Example request:

```bash
curl -X GET -G "/api/v1/user/edit/1" 
```

```javascript
const url = new URL("/api/v1/user/edit/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/user/edit/{user_id}`


<!-- END_661fe0a58dac95ae3ec7afe531a1712f -->

<!-- START_cc0369cbb03241fc2c28b487f71710bb -->
## /api/v1/user/update/{user_id}
> Example request:

```bash
curl -X POST "/api/v1/user/update/1" 
```

```javascript
const url = new URL("/api/v1/user/update/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/user/update/{user_id}`


<!-- END_cc0369cbb03241fc2c28b487f71710bb -->

<!-- START_ccb7fb24e632470c4e44ddc9bff64e39 -->
## /api/v1/user/login
> Example request:

```bash
curl -X POST "/api/v1/user/login" 
```

```javascript
const url = new URL("/api/v1/user/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/user/login`


<!-- END_ccb7fb24e632470c4e44ddc9bff64e39 -->

<!-- START_18623e245ca2e03cdf0e38dce03ed605 -->
## /api/v1/user/mystore/{user_id}
> Example request:

```bash
curl -X GET -G "/api/v1/user/mystore/1" 
```

```javascript
const url = new URL("/api/v1/user/mystore/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/user/mystore/{user_id}`


<!-- END_18623e245ca2e03cdf0e38dce03ed605 -->

<!-- START_5ac9c5a63a1aca7a78bac1480121d2af -->
## /api/v1/stores
> Example request:

```bash
curl -X GET -G "/api/v1/stores" 
```

```javascript
const url = new URL("/api/v1/stores");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/stores`


<!-- END_5ac9c5a63a1aca7a78bac1480121d2af -->

<!-- START_dd20e13f750fa27e722ee9c0ffa5b774 -->
## /api/v1/store/create
> Example request:

```bash
curl -X POST "/api/v1/store/create" 
```

```javascript
const url = new URL("/api/v1/store/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/store/create`


<!-- END_dd20e13f750fa27e722ee9c0ffa5b774 -->

<!-- START_9806a10d430b9016860bf2a2b4f2a0da -->
## /api/v1/store/show/{store_id}
> Example request:

```bash
curl -X GET -G "/api/v1/store/show/1" 
```

```javascript
const url = new URL("/api/v1/store/show/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/store/show/{store_id}`


<!-- END_9806a10d430b9016860bf2a2b4f2a0da -->

<!-- START_8ddf364cb4753c59edb8cf5948504f91 -->
## /api/v1/store/update/{store_id}
> Example request:

```bash
curl -X POST "/api/v1/store/update/1" 
```

```javascript
const url = new URL("/api/v1/store/update/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/store/update/{store_id}`


<!-- END_8ddf364cb4753c59edb8cf5948504f91 -->

<!-- START_eb029f317d315969aacd1126022ba278 -->
## /api/v1/store/delete/{store_id}
> Example request:

```bash
curl -X DELETE "/api/v1/store/delete/1" 
```

```javascript
const url = new URL("/api/v1/store/delete/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/v1/store/delete/{store_id}`


<!-- END_eb029f317d315969aacd1126022ba278 -->

<!-- START_65a7ceb721aed6c3f619a144bef0cab0 -->
## /api/v1/store/services/{store_id}
> Example request:

```bash
curl -X GET -G "/api/v1/store/services/1" 
```

```javascript
const url = new URL("/api/v1/store/services/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/store/services/{store_id}`


<!-- END_65a7ceb721aed6c3f619a144bef0cab0 -->

<!-- START_c19f91b9bdf854c08139a3eda48fe3eb -->
## /api/v1/services
> Example request:

```bash
curl -X GET -G "/api/v1/services" 
```

```javascript
const url = new URL("/api/v1/services");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/services`


<!-- END_c19f91b9bdf854c08139a3eda48fe3eb -->

<!-- START_b870933609c7223275115ba8afc50113 -->
## /api/v1/service/create
> Example request:

```bash
curl -X POST "/api/v1/service/create" 
```

```javascript
const url = new URL("/api/v1/service/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/service/create`


<!-- END_b870933609c7223275115ba8afc50113 -->

<!-- START_07756b3cfd713b9c7ea6bd1325bf5cd2 -->
## /api/v1/service/show/{service_id}
> Example request:

```bash
curl -X GET -G "/api/v1/service/show/1" 
```

```javascript
const url = new URL("/api/v1/service/show/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/service/show/{service_id}`


<!-- END_07756b3cfd713b9c7ea6bd1325bf5cd2 -->

<!-- START_9335018472f30090d1f90d7d5372fb20 -->
## /api/v1/service/update/{service_id}
> Example request:

```bash
curl -X PUT "/api/v1/service/update/1" 
```

```javascript
const url = new URL("/api/v1/service/update/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/v1/service/update/{service_id}`


<!-- END_9335018472f30090d1f90d7d5372fb20 -->

<!-- START_3bbbb6d4ae5b0b57a173232f87471c72 -->
## /api/v1/service/delete/{service_id}
> Example request:

```bash
curl -X DELETE "/api/v1/service/delete/1" 
```

```javascript
const url = new URL("/api/v1/service/delete/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/v1/service/delete/{service_id}`


<!-- END_3bbbb6d4ae5b0b57a173232f87471c72 -->

<!-- START_089adb38edc4e7548db076436717a6e1 -->
## /api/v1/services_cat
> Example request:

```bash
curl -X GET -G "/api/v1/services_cat" 
```

```javascript
const url = new URL("/api/v1/services_cat");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/services_cat`


<!-- END_089adb38edc4e7548db076436717a6e1 -->

<!-- START_28095a9e1e4e9f887685b9db9195d060 -->
## /api/v1/sc/create
> Example request:

```bash
curl -X POST "/api/v1/sc/create" 
```

```javascript
const url = new URL("/api/v1/sc/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/sc/create`


<!-- END_28095a9e1e4e9f887685b9db9195d060 -->

<!-- START_5c041870b9f313f5b338ba076b05d1d6 -->
## /api/v1/sc/show/{cat_id}
> Example request:

```bash
curl -X GET -G "/api/v1/sc/show/1" 
```

```javascript
const url = new URL("/api/v1/sc/show/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/sc/show/{cat_id}`


<!-- END_5c041870b9f313f5b338ba076b05d1d6 -->

<!-- START_95bca05d8b75e245a80b3a52fc1cbceb -->
## /api/v1/sc/update/{cat_id}
> Example request:

```bash
curl -X PUT "/api/v1/sc/update/1" 
```

```javascript
const url = new URL("/api/v1/sc/update/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/v1/sc/update/{cat_id}`


<!-- END_95bca05d8b75e245a80b3a52fc1cbceb -->

<!-- START_6cdf866b274f1dcaa1c6adbb04a49f48 -->
## /api/v1/sc/delete/{cat_id}
> Example request:

```bash
curl -X DELETE "/api/v1/sc/delete/1" 
```

```javascript
const url = new URL("/api/v1/sc/delete/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/v1/sc/delete/{cat_id}`


<!-- END_6cdf866b274f1dcaa1c6adbb04a49f48 -->

<!-- START_97e294b7f7b0903357e76b938dcf1bfe -->
## /api/v1/sc/services/{cat_id}
> Example request:

```bash
curl -X GET -G "/api/v1/sc/services/1" 
```

```javascript
const url = new URL("/api/v1/sc/services/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/sc/services/{cat_id}`


<!-- END_97e294b7f7b0903357e76b938dcf1bfe -->

<!-- START_05ec10c440d63dde53f24fad5ceec593 -->
## /api/v1/storeaddresses
> Example request:

```bash
curl -X GET -G "/api/v1/storeaddresses" 
```

```javascript
const url = new URL("/api/v1/storeaddresses");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/storeaddresses`


<!-- END_05ec10c440d63dde53f24fad5ceec593 -->

<!-- START_057a70abf58833df58746ba6e70eea29 -->
## /api/v1/storeaddress/create
> Example request:

```bash
curl -X POST "/api/v1/storeaddress/create" 
```

```javascript
const url = new URL("/api/v1/storeaddress/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST /api/v1/storeaddress/create`


<!-- END_057a70abf58833df58746ba6e70eea29 -->

<!-- START_a443473c094f3cdefb71ffed150f5999 -->
## /api/v1/storeaddress/show/{store_addr_id}
> Example request:

```bash
curl -X GET -G "/api/v1/storeaddress/show/1" 
```

```javascript
const url = new URL("/api/v1/storeaddress/show/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "error": true,
    "message": "Unauthorized Request"
}
```

### HTTP Request
`GET /api/v1/storeaddress/show/{store_addr_id}`


<!-- END_a443473c094f3cdefb71ffed150f5999 -->

<!-- START_3eccfd4d3c18e0bc94b72ef21b8d7486 -->
## /api/v1/storeaddress/update/{store_addr_id}
> Example request:

```bash
curl -X PUT "/api/v1/storeaddress/update/1" 
```

```javascript
const url = new URL("/api/v1/storeaddress/update/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT /api/v1/storeaddress/update/{store_addr_id}`


<!-- END_3eccfd4d3c18e0bc94b72ef21b8d7486 -->

<!-- START_fea350102248c37465edee57c4b0d2b7 -->
## /api/v1/storeaddress/delete/{store_addr_id}
> Example request:

```bash
curl -X DELETE "/api/v1/storeaddress/delete/1" 
```

```javascript
const url = new URL("/api/v1/storeaddress/delete/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE /api/v1/storeaddress/delete/{store_addr_id}`


<!-- END_fea350102248c37465edee57c4b0d2b7 -->


