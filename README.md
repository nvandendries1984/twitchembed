<img src="https://octobercms.com/storage/app/uploads/public/63e/ff7/0d5/63eff70d50430445849533.png" alt="TwitchEmbed">

Plugin was initially made with Rainlab.Builder extended with a custom Component to display the channel on frontend.

Installation can be done via Console or Marketplace
''php artisan plugin:install NielsVanDenDries.Twitchembed''

The use of any Twitch embeddable experience must comply with the requirements below and the Twitch Developer Services Agreement. Twitch may revoke embed usage for domains that are not in compliance. Twitch reserves the right to revoke your ability to use our embeddable experiences, for any reason, at any time.

[Twitch Dev Site](https://dev.twitch.tv/docs/embed/#embedded-experiences-requirements)

1.1 Domains that use Twitch embeds must use SSL certificates.

1.2 Twitch requires our embed users to verify where they use our products on the web using a special parameter: parent. Depending on your integration method, you may provide this as a query parameter in an iframe src attribute, or as a property on the JavaScript object you use to construct a new Twitch embed. For more information, see the embed API documentation above and our initial announcement of the requirement. Embed domains that don’t specify this parameter will trigger a playback error message that will direct end users to click through to Twitch if they wish to watch that content.

1.3 Embeds must utilize only Twitch-approved player elements and should not be obscured in any way by other page elements in whatever domain context they may appear. Certain features, such as the ability to send chat messages, may be disabled if the iframe is obscured or not visible.

1.4 Embeds must adhere to the recommended minimum height and width requirements outlined in their respective attribute tables.
