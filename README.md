
![RavMesser](https://raw.githubusercontent.com/responder/webhook/master/ravmesser_logo.png)
# Rav-Messer Webhook

This is an up to date documentation for RavMesser Outgoing-Webhooks.



## What does it use for? ##

**The Webhook mechanism is used for getting Data from RavMesser whenever subscriber comes from subscription-form or added manually through Rav-Messer system**


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

**Please call our support ( 03-717-7777 ) or email the support ( support@responder.co.il ) with the parameters bellow:**

  | Name     | Description | Example     |
  | ---------|-------------|-------------|
  | user_name | Your user-name in RavMesser | my_user |
  | url  | The URL address that the data has to go into (usually supplied by developer/technical representative of your destination system)  | https://myCRMcompany/incomingWebhooksUrl |

