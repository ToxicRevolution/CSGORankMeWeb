---
title: F.A.Q.
---

# What is VAC Checker?

This system, on a nightly basis, will check your database for the top number of specified players to check and see if they have a VAC status against the steam API. It will do one of two things, either remove them on the spot or set it to be reviewed from the admin panel.


# How do you enable Vac Checker?
Set the following flags in your `.env` configuration file.

```
VAC_COUNT=100 // Number of players to check
VAC_ENABLE=true // if the system is enabled
VAC_AUTODELETE=false // Whether to remove the ban or flag it for review in the admin panel
```

Please note you are regulated by Valves API rate limits and we are not responsible for you not following Valve's rules. You should set this to a reasonable number.