<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Spam deletion block settings
 *
 * @package    block_spam_deletion
 * @copyright  2014 Andrew Davis
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configtextarea('block_spam_deletion_badwords',
                                                    get_string('badwordslist','block_spam_deletion'),
                                                    get_string('badwordslistdesc', 'block_spam_deletion'),
                                                    get_string('badwords', 'block_spam_deletion')));

    $settings->add(new admin_setting_configtext('block_spam_deletion_throttle_postcount',
                                                get_string('postthrottlecount','block_spam_deletion'),
                                                get_string('postthrottlecountdesc','block_spam_deletion'),
                                                2,
                                                PARAM_INT));

    $settings->add(new admin_setting_configduration('block_spam_deletion_throttle_duration',
                                                    get_string('postthrottleduration','block_spam_deletion'),
                                                    get_string('postthrottledurationdesc','block_spam_deletion'),
                                                    60*60*4));

    $settings->add(new admin_setting_configtext('block_spam_deletion_akismet_key',
                                                get_string('akismetkey','block_spam_deletion'),
                                                '', ''));

    $settings->add(new admin_setting_configduration('block_spam_deletion_akismet_account_age',
                                                get_string('akismetaccountage','block_spam_deletion'),
                                                get_string('akismetaccountagedesc','block_spam_deletion'),
                                                WEEKSECS));

    $settings->add(new admin_setting_configtext('block_spam_deletion_invalidchars_percentage',
                                                get_string('invalidcharspercentage','block_spam_deletion'),
                                                get_string('invalidcharspercentagedesc','block_spam_deletion'),
                                                50,
                                                PARAM_INT));
}
