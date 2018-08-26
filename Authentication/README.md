# Authenticated

## Auth data - for verify and the secure connection and the user's information.


**Parameters to be send in "Authorization" header:**
  
  | Name     | Description                       | What is it used for?|
  | ---------|-----------------------------------|-----------|
  | c_key | The client's key | Identify the specific connection for RavMesser API
  | c_secret  | md5(The client's secret + nonce )| Secure the specific connection authentication for RavMesser API
  | u_key | The user's key | Identify the user of RavMesser
  | u_secret | md5(The user's secret + nonce )| Secure the user authentication of RavMesser
  | nonce | Nonce = random number which is unique for each request| Make sure no request will repeat itself
  | timestamp | Current time in "timestamp" format | Make sure the request is not been used long time after it was created
  
**Important to know:**

*The parameters have to be separated in ',' sign*

*Each parameter has to be url-encoded*

**Authorization header - Example:**

    Authorization: c_key=AJVKJLKDlf6SDSHJ47JE33K506JG59J6,c_secret=521b73bfc63fefbce0ae23ad872d9c99,u_key=SDDGY439KDFLG23432OW94K530GLEKT0,u_secret=8f6c248d9c5cfae704a0a9849d4ea0ac,nonce=3153910c36975aa44fe770be72d3bfd3,timestamp=1535283995

        
    
