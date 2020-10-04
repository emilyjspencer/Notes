const { ApolloServer, gql } = require('apollo-server')

let people = [
  {
    name: "Benjamin Button",
    phone: "23748559494",
    street: "21 Cherry Tree Lane",
    city: "London",
    id: "3d594650-3436-11e9-bc57-8b80ba54c431"
  },
  {
    name: "Veruca Salt",
    phone: "084938230",
    street: "10 I want it Now",
    city: "Chipping Campden",
    id: '3d599470-3436-11e9-bc57-8b80ba54c431'
  },
  {
    name: "Lorraine Warren",
    street: "666 I see dead people",
    city: "Bridgeport",
    id: '3d599471-3436-11e9-bc57-8b80ba54c431'
  },
]

const typeDefs = gql`
  type Person {
    name: String!
    phone: String
    street: String!
    city: String! 
    id: ID!
  }

  type Query {
    personCount: Int!
    allPeople: [Person!]!
    findPerson(name: String!): Person
  }
`

const resolvers = {
  Query: {
    personCount: () => persons.length,
    allPeople: () => persons,
    findPerson: (root, args) =>
      persons.find(p => p.name === args.name)
  }
}

const server = new ApolloServer({
  typeDefs,
  resolvers,
})

server.listen().then(({ url }) => {
  console.log(`Server ready at ${url}`)
})