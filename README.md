## Laravel

Base Laravel repository

------------------------------------------------------------------------------------------

### API запросы
<details>
 <summary><code><span style="color: #00a9b5;font-weight: bold;">GET</span></code> <code><b>/api/healthcheck</b></code> 
<code> (проверка доступа к api)
</code></summary>

##### Параметры

> Нет

##### Responses
**Http code**: `200`

**Content-type**: `application/json`

**Response**
```json 
{
  "success": true,
  "db_status": true,
  "redis_status": true
} 
```
</details>

------------------------------------------------------------------------------------------
#### Добавить доступ на папки:
``cd storage && sudo chmod -R 0777 framework app logs``


