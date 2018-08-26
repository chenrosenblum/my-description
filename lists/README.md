# Lists

## Retrieve lists - By "GET" request

**URL:** http://api.responder.co.il/main/lists

**Authentication:** Auth Data in headers. for more details [click here](https://github.com/chenrosenblum/my-description/tree/master/Authentication/ )

**Parameters**
  
  | Name     | Range    | DefaultValue | IsRequired | PassedBy  | Example     | Invalid Values | NOTE!                             |
  | ---------|----------|--------------|------------|-----------|-------------|----------------|-----------------------------------|
  | list_ids | none     | none         | No         | Url query |             | Invalid ID's will be returned in a JSON array of "INVALID_LIST_IDS" |NOTE! when used with "limit" or "offset" results are unpredictable
  
