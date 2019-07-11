To install this mod:

1. Go to [titanembeds.com](https://titanembeds.com/), sign in with your discord account, and configure your embed. You'll need the embed code later in the install.
2. Place the `main_chat.php` file into the `application/views/_base_override/main/pages/` folder of your Nova.
3. Navigate to `Control Panel > Site Settings > Messages & Titles`
4. Click on `Add New Message`
    * Message Label: `Discord Chat Info`
    * Message Key: `titan_info`
    * Type: `Messages`
    * Content: Any pre-amble you want, then copy and paste the embed code from the Titan website here.
5. Click on `Add New Message` again.
   * Message Label: `Discord Chat Header`
   * Message Key: `titan_header`
   * Type: `Page titles`
   * Content: Whatever you want to name your chat page.
7. Look for the `application/controlers/main.php` file. If you've not modified it, replace it with the included `main.php` file. If you've previously modified it, save a copy to `main.php.old`, then copy and paste lines 16–25 in before the last `}` in your existing `main.php` file.
6. Test your embed, it should be located at `your.site/main/chat` (or `your.site/index.php/main/chat` if you haven't done the pretty url mod.)
