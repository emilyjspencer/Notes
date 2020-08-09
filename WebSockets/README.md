# Notes

The WebSocket API enables two-way, interactive communication between the client and the server.

HTTP request-response cycle vs. websocket protocol

Both HTTP and WebSocket send messages over a TCP connection (Transmission Control Protocol) - a transport-layer standard that ensures that packets of bytes are delivered from one computer to another.
While, both HTTP and WebSocket use the same delivery mechanism, the protocols for structuring the messages that are being set, are different.

HTTP

The browser makes a request for a web page, which is received by the server. The server checks that the request page exists and then issues a response. If the page exists, it is sent back to the browser (client).There is one-way communication at any given time between the client and the server.

Websockets 

A WebSocket connection is established through a process known as the WebSocket handshake, which starts with the client sending an HTTP 'handshake' request to the server with an upgrade header that informs the server that the client wishes to establish a WebSocket connection. 
If the server supports this protocol, an agreement is made to upgrade and this is communicated through an Upgrade header in the response ( the server sends a successful handshake response)
Once the handshake is complete and the connection is upgraded, the HTTP protocol is replaced by the Websocket protocol (the protocol switched from HTTP to WebSocket) that uses the same underlying TCP/IP connection. 
Now, both the client and the server can send messages at the same time
 

WebSockets thus enable clients to create real-time functionality and establish full-duplex (two-way), persistent communication between the client and the server in applications.
Using sockets means that they are continuous channels of communication between the client and the server and both can send messages, at the same time.
A server can open WebSocket connections with multiple clients and can message one, several, or all of these clients
When the server receives new information, it automatically sends it to the client through the socket - the server can keep track of each client and push messages to a subset of clients.
This means that in a chat application, for instance, many people can connect to a chat app and two people who are subscribed to the chat, send messages at the same time.

WebSockets uses cases:

chat applications, multi-player games, financial tickers 

More than one client enters a message which gets saved in the server and messages from different clients get broadcast to all of the clients at once - resulting in realtime communication, which removes the need for browser refreshing every time a new message is created, and allowing for complete two-way communication without re-establishing a connection.

Libraries/implements/projects etc that can be used to enable real-time functionality:

socket.io - JavaScript - library for JS
ActionCable - Rails built-in library
Channels - Django - project that allows Django to handle WebSockets
Gorilla - Go - WebSocket implementation for Go
Meteor - JavaScript - package
Apollo - GraphQL server that uses WebSockets