# Lists

## Retrieve lists - By "GET" request

**URL:** http://api.responder.co.il/main/lists

**Authentication:** Auth Data in headers. for more details [click here](https://github.com/chenrosenblum/my-description/tree/master/Authentication/ )

**Parameters**
  
  | Name     | PassedBy  | Example     | Range    | DefaultValue | Invalid Values | NOTE!                             |
  | ---------|-----------|-------------|----------|--------------|----------------|-----------------------------------|
  | list_ids | Url query | list_ids=123456,78910 | none     | none         | Invalid ID's will be returned in a JSON array of "INVALID_LIST_IDS" |NOTE! when used with "limit" or "offset" results are unpredictable
  
