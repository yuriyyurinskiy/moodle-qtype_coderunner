<?php
// This file is part of CodeRunner - http://coderunner.org.nz/
//
// CodeRunner is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// CodeRunner is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with CodeRunner.  If not, see <http://www.gnu.org/licenses/>.
/*
 * @package    qtype
 * @subpackage coderunner
 * @copyright  2016 Richard Lobb, University of Canterbury
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot . '/question/type/coderunner/Twig/Autoloader.php');
require_once($CFG->dirroot . '/question/type/coderunner/locallib.php');
require_once($CFG->dirroot . '/question/type/coderunner/constants.php');
require_once($CFG->dirroot . '/question/type/coderunner/grader/graderbase.php');
require_once($CFG->dirroot . '/question/type/coderunner/sandbox/sandboxbase.php');
require_once($CFG->dirroot . '/question/type/coderunner/escapers.php');
require_once($CFG->dirroot . '/question/type/coderunner/testingoutcome.php');
require_once($CFG->dirroot . '/question/type/coderunner/questiontype.php');

namespace qtype_coderunner;

// The jobrunner class contains all code concerned with running a question
// in the sandbox.
class jobrunner {

}