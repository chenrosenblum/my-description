
![RavMesser](https://raw.githubusercontent.com/responder/webhook/master/ravmesser_logo.png)
# Rav-Messer Webhook

This is an up to date documentation for RavMesser Outgoing-Webhooks.



## What does it use for? ##

**The Webhook mechanism is used for getting Data from RavMesser whenever subscriber comes from subscription-form.**


## How does the mechanism work? ##

**Definition:** The "webhook" definition sets in account level - which mean that any subscription in any list will trigger the Webhook sending mechanism

**Technology:** The webhook is sent by "POST" technology. The data passed by the post data in JSON format (see details below).

**Data format & example:** The data passed in JSON format with the following details:


    {
       "type": "subscriber" //fixed value: 'subscribe' - for user-subscription. 'manual' - for adding subscriber manually through RavMesser system,
       "list_ids": [123, 456] // the list's that the subscriber added to,
       "email": "subscriber_email_value",
       "name": "subscriber_name_value",
       "phone": "subscriber_phone_value",
       "personal_fields": {
           "personal_field_id_1": "personal_field_value_1",
           "personal_field_id_2": "personal_field_value_2"
        }
    }


## What do I need to set my own Webhook? ##

**Parameters for the definition:**

  | Name     | Description | Example     |
  | ---------|-------------|-------------|
  | user_name | list of ListID's to be retrieved | list_ids=123456,78910 |
  | url  | Maximum number of Lists to be retrieved | limit=100 |

** The definition: ** Please call our support ( 03-717-7777 ) with the parameters above or email the support ( support@responder.co.il )
