---
title: Authentication
---
<Block>
# Login

You can use this endpoint to authenticate a user.


<Example>
 
```bash
curl -X POST http://example.com/api/auth/login \
  --data '{
    "username": "my-username",
    "password": "my-password"
  }'
```

</Example>

</Block>

<Block>
# Logout

Used to expire the users current authentication token.


<Example>

```bash
curl -X POST http://example.com/api/auth/login \
  --data '{
    "username": "my-username",
    "password": "my-password"
  }'
```
</Example>
</Block>

</Block>

<Block>
# Me

Returns info about the user from the provided authentication token.


<Example>

```bash
curl -X POST http://example.com/api/auth/me \
  --data '{
    "username": "my-username",
    "password": "my-password"
  }'
```

</Example>
</Block>