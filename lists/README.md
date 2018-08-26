# Lists

## Retrieve lists - By "GET" request

**URL:** http://api.responder.co.il/main/lists

**Method:** Get

**Authentication:** Auth Data in headers. for more details [click here](https://github.com/chenrosenblum/my-description/tree/master/Authentication/ )

**Parameters (Optional):**
  
  | Name     | Description | PassedBy  | Example     | Range    | DefaultValue | Invalid Values | NOTE!                             |
  | ---------|-------------|-----------|-------------|----------|--------------|----------------|-----------------------------------|
  | list_ids | list of ListID's to be retrieve | Url query | list_ids=123456,78910 | none     | none         | Invalid ID's will be returned in a JSON array of "INVALID_LIST_IDS" | When used with "limit" or "offset" results are unpredictable
  | limit  | Maximum number of Lists to be retrived | Url query | limit=100 | 0 <= limit <= 500     | 500         | If parameter is not in range - default value will be used | 
  | offset | The position to start the count of "limit" from | Url query | offset=1500 | offset >= 0     | 0         | |   

**Response Example:**

    {
       "LISTS" : [
          {
             "ID" : 123456,
             "DESCRIPTION" : "The List",
             "REMOVE_TITLE" : "Bye Bye!",
             "SITE_NAME" : "Responder!",
             "SITE_URL" : "http://www.esponder.co.il",
             "LOGO" : "http://www.responder.co.il/images/wn_06.gif",
             "SENDER_NAME" : "Someone",
             "SENDER_EMAIL" : "someone@responder.co.il",
             "SENDER_ADDRESS" : "Somewhere At Responder",
             "NAME" : "english_name",
             "AUTH_MAIL_SUBJECT" : "",
             "AUTH_MAIL_BODY" : "",
             "AUTH_MAIL_LINK" : "",
             "AUTH_MAIL_DIR" : "",
             "AUTH_MAIL_PAGE" : "",
             "AUTH_MAIL_FORM" : "",
             "AUTH_MAIL_MANUAL" : "",
             "EMAIL_NOTIFY" : {
                "first@responder.co.il",
                "second@responder.co.il"
             },
             "AUTOMATION" : {
                123457 : "First List",
                123458 : "Another List"
             }
          }
       ],
       "INVALID_LIST_IDS" : [456]
    }
    
    

## Create a list - By "POST" request

**URL:** http://api.responder.co.il/main/lists

**Method:** Post

**Authentication:** Auth Data in headers. for more details [click here](https://github.com/chenrosenblum/my-description/tree/master/Authentication/ )

**Parameter (Required!):**
  
  | Name     | Description | PassedBy  | Example |
  | ---------|-------------|-----------|---------|
  | info | Json object with List's data | Post data | See bellow the full Json example |

*In post-data: The Json object has to be sent in json-encode variation*

**Json object of List's data Example:**
        
        {
           "DESCRIPTION" : "The List",
           "REMOVE_TITLE" : "Bye Bye!",
           "SITE_NAME" : "Responder!",
           "SITE_URL" : "http://www.esponder.co.il",
           "LOGO" : "http://www.responder.co.il/images/wn_06.gif",
           "SENDER_NAME" : "Someone",
           "SENDER_EMAIL" : "someone@responder.co.il",
           "SENDER_ADDRESS" : "Somewhere At Responder",
           "NAME" : "english_name",
           "AUTH_MAIL_SUBJECT" : "",
           "AUTH_MAIL_BODY" : "",
           "AUTH_MAIL_LINK" : "",
           "AUTH_MAIL_DIR" : "",
           "AUTH_MAIL_PAGE" : "",
           "AUTH_MAIL_FORM" : "",
           "AUTH_MAIL_MANUAL" : "",
           "EMAIL_NOTIFY" : ["first@responder","second@responder.co.il"],
           "AUTOMATION" : [123457,123458]
        }

**Response Example:**

    {
       "LIST_ID" : 123456789,
       "INVALID_EMAIL_NOTIFY" : ["second@responder"],
       "INVALID_LIST_IDS" : [123458],
       "ERRORS" : []
    }
    

## Update a list - By "PUT" request

**URL:** http://api.responder.co.il/main/lists/ + list_id_to_update

**Method:** Put

**Authentication:** Auth Data in headers. for more details [click here](https://github.com/chenrosenblum/my-description/tree/master/Authentication/ )

**Parameter (Required!):**
  
  | Name     | Description | PassedBy  | Example | NOTE! |
  | ---------|-------------|-----------|---------|-------|
  | info | Json object with List's data to update | Post data | See bellow the full Json example | Updating "EMAIL_NOTIFY" or "AUTOMATION" will delete the previous records!
  
*In post-data: The Json object has to be sent in json-encode variation*

**Json object of List's data Example:**
        
        {
           "DESCRIPTION" : "The new description for the List",
           "REMOVE_TITLE" : "See you!",
           "SITE_NAME" : "Responder!",
           "SITE_URL" : "http://www.esponder.co.il",
           "LOGO" : "http://www.responder.co.il/images/wn_06.gif",
           "SENDER_NAME" : "Someone",
           "SENDER_EMAIL" : "someone@responder.co.il",
           "SENDER_ADDRESS" : "Somewhere At Responder",
           "NAME" : "english_name",
           "AUTH_MAIL_SUBJECT" : "",
           "AUTH_MAIL_BODY" : "",
           "AUTH_MAIL_LINK" : "",
           "AUTH_MAIL_DIR" : "",
           "AUTH_MAIL_PAGE" : "",
           "AUTH_MAIL_FORM" : "",
           "AUTH_MAIL_MANUAL" : "",
           "EMAIL_NOTIFY" : ["first@responder","second@responder.co.il"],
           "AUTOMATION" : [999009]
        }

**Response Example:**

    {
       "INVALID_EMAIL_NOTIFY" : [],
       "INVALID_LIST_IDS" : [],
       "ERRORS" : []
    }
    

## Delete a list - By "DELETE" request

**URL:** http://api.responder.co.il/main/lists/ + list_id_to_delete

**Method:** Delete

**Authentication:** Auth Data in headers. for more details [click here](https://github.com/chenrosenblum/my-description/tree/master/Authentication/ )

**Parameters:** None

**Response Example:**

    {
       "DELETED_LIST_ID" : 654987
    }