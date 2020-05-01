# Websocket Protocol 

### Http request-response cycle vs. websocket protocol

**Http request response cycle**

The browser makes a request which is received by the server and which then issues a response.
There is one-way communication at any given time between the client and the server (only going in one direction)


**Websocket protocol**

A WebSocket connection is established through a process known as the WebSocket
handshake, which starts with the client sending an HTTP request to the server. 
and which includes an upgrade header that informs the server that the
client wishes to establish a WebSocket connection.
If the server supports this protocol, an agreement is made to upgrade and this is communicated
through an Upgrade header in the response.
Once the handshake is complete, the HTPP connection is replaced by a Websocket connection
that uses the same underlying TCP/IP connection 
In constrast to the HTTP protocal, information flows in both directions
at any given time

* Full-duplex communication between several/many clients and the server
Example use cases: chat applications, multi-player games 
More than one client enters a message which gets saved in the server and messages from different
clients get broadcast to all of the clients at once - resulting in realtime communication, which removes the need
for browser refreshing every time a new message is created, and allowing for complete two-way communication 
without re-establishing a connection.

**How are the requests handled?**

**On the server side:**

Channels
Specific features are handled by channels
Channels are created and then used to broadcast messages to all users who are "subscribed" to 
the channel, meaning those wuser who have the chat widndow open (facebook chat)

**On the client side:**

With regards to Actioncable: 
Use Actioncable's broadcast method 

The data that is received(broadcast from the controller) can be modified 
Data can be appended to the chat window 






