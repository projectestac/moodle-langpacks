<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'block_rss_client', language 'en', version '4.4'.
 *
 * @package     block_rss_client
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfeed'] = 'Add RSS feed URL';
$string['addheadlineblock'] = 'Add RSS headline block';
$string['addnew'] = 'Add new';
$string['addnewfeed'] = 'Add a new feed';
$string['cannotmakemodification'] = 'You are not allowed to make modifications to this RSS feed at this time.';
$string['choosefeedlabel'] = 'Choose the feeds which you would like to make available in this block:';
$string['clientchannellink'] = 'Source site...';
$string['clientnumentries'] = 'The default number of entries to show per feed.';
$string['clientshowchannellinklabel'] = 'Should a link to the original site (channel link) be displayed? (Note that if no feed link is supplied in the news feed then no link will be shown) :';
$string['clientshowimagelabel'] = 'Show channel image if available';
$string['configblock'] = 'Configure this block';
$string['couldnotfindfeed'] = 'Could not find feed with ID.';
$string['couldnotfindloadrssfeed'] = 'Could not find or load the RSS feed.';
$string['customtitlelabel'] = 'Custom title (leave blank to use title supplied by feed)';
$string['deletefeedconfirm'] = 'Are you sure you want to delete this feed?';
$string['disabledrssfeeds'] = 'RSS feeds are disabled';
$string['displaydescriptionlabel'] = 'Display each link\'s description?';
$string['editafeed'] = 'Edit a feed';
$string['editfeeds'] = 'Edit, subscribe or unsubscribe from RSS feeds';
$string['editnewsfeeds'] = 'Edit news feeds';
$string['editrssblock'] = 'Edit RSS headline block';
$string['enableautodiscovery'] = 'Enable auto-discovery of feeds?';
$string['enableautodiscovery_help'] = 'If enabled, feeds on web pages are found automatically. For example, if https://docs.moodle.org is entered, then https://docs.moodle.org/en/index.php?title=Special:RecentChanges&feed=rss would be found.';
$string['failedfeed'] = 'Feed failed to download - will retry after {$a}';
$string['failedfeeds'] = 'One or more RSS feeds have failed';
$string['feed'] = 'Feed';
$string['feedadded'] = 'RSS feed added';
$string['feeddeleted'] = 'RSS feed deleted';
$string['feeds'] = 'RSS feeds';
$string['feedsaddedit'] = 'Add/edit feeds';
$string['feedsconfigurenewinstance'] = 'Click here to configure this block to display RSS feeds.';
$string['feedsconfigurenewinstance2'] = 'Click the edit icon above to configure this block to display RSS feeds.';
$string['feedupdated'] = 'RSS feed updated';
$string['feedurl'] = 'Feed URL';
$string['findmorefeeds'] = 'Find more RSS feeds';
$string['managefeeds'] = 'Manage RSS feeds';
$string['nofeeds'] = 'There are no RSS feeds defined for this site.';
$string['numentries'] = 'Entries per feed';
$string['pickfeed'] = 'Pick a RSS feed';
$string['pluginname'] = 'RSS feeds';
$string['privacy:metadata:block_rss_client:description'] = 'The description of the RSS feed.';
$string['privacy:metadata:block_rss_client:preferredtitle'] = 'The preferred (custom) title of the RSS feed.';
$string['privacy:metadata:block_rss_client:shared'] = 'If the RSS feed is available to all courses.';
$string['privacy:metadata:block_rss_client:skiptime'] = 'The defined time in seconds that the cron will wait between attempts to retry failing RSS feeds.';
$string['privacy:metadata:block_rss_client:skipuntil'] = 'The maximum defined time that the cron will attempt to open failing RSS feeds.';
$string['privacy:metadata:block_rss_client:tableexplanation'] = 'RSS block information is stored here.';
$string['privacy:metadata:block_rss_client:title'] = 'The title of the RSS feed.';
$string['privacy:metadata:block_rss_client:url'] = 'The URL of the RSS feed.';
$string['privacy:metadata:block_rss_client:userid'] = 'The ID of the user that added the RSS feed.';
$string['refreshfeedstask'] = 'Refresh RSS feeds task';
$string['remotenewsfeed'] = 'RSS feed';
$string['rss_client:addinstance'] = 'Add new RSS feeds block';
$string['rss_client:createprivatefeeds'] = 'Create private RSS feeds';
$string['rss_client:createsharedfeeds'] = 'Create shared RSS feeds';
$string['rss_client:manageanyfeeds'] = 'Manage any RSS feeds';
$string['rss_client:manageownfeeds'] = 'Manage own RSS feeds';
$string['rss_client:myaddinstance'] = 'Add new RSS feeds block to Dashboard';
$string['seeallfeeds'] = 'See all feeds';
$string['sharedfeed'] = 'Shared feed';
$string['shownumentrieslabel'] = 'Max number entries to show per block.';
$string['submitters'] = 'Who will be allowed to define new RSS feeds? Defined feeds are available for any page on your site.';
$string['submitters2'] = 'Submitters';
$string['timeout'] = 'Time in minutes before an RSS feed expires in cache. Note that this time defines the minimum time before expiry; the feed will be refreshed in cache on the next cron execution after expiry. Recommended values are 30 mins or greater.';
$string['timeout2'] = 'Timeout';
$string['timeoutdesc'] = 'Time in minutes for an RSS feed to live in cache.';
$string['updatefeed'] = 'Update RSS feed URL';
$string['viewfeed'] = 'View feed';
