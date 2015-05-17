<?php

	/**
	 * 
	 * Class containing all script constants, allowing a simple modification if needed.
	 * @author Ondrej Krpec, xkrpec01@stud.fit.vutbr.cz
	 *
	 */
	class Constant {
		
		############################  VARIABLES AND CONSTANT  ###########################
		
		// arg parameters
		const ARG_FIRST_PHASE = '--first';
		const ARG_SECOND_PHASE = '--second';
		const ARG_THIRD_PHASE = '--third';
		const ARG_FOURTH_PHASE = '--fourth';
		
		// arg parameters shortcuts
		const ARG_EVAL_PHASE = '-e';
		const ARG_GEN_PHASE = '-g';
		const ARG_COMMENTS = '-c';
		
		const ARG_HELP = '--help';
		const ARG_HELP_SHORT = '-h';
		
		// arg paths
		const ARG_INPUT_PATH = '--input=';
		const ARG_OUTPUT_PATH = '--output=';
		const ARG_INPUT_TEMPLATE_PATH = '--inputTemplate=';
		const ARG_INPUT_JSON = '--projectsJSON=';
		const ARG_TEMPLATE_JSON = '--templatesJSON=';
		const ARG_INPUT_CSV = '--inputCSV=';
		
		const ARG_JSON_NAME = '--nameJSON=';
		const ARG_CSV_NAME = '--nameCSV';
		
		// paging
		const ARG_START_INDEX = '--index=';
		const ARG_COUNT = '--count=';
		const ARG_FORCE = '-f';
		
		const START_INDEX = 1;
		const COUNT = 2000;
		
		// file paths and file names
		const DEFAULT_PATH = './';
		const DEFAULT_FILENAME = 'generatedOutput';
		
		// file extensions
		const JSON_FILE_EXTENSION = '.json';
		const CSV_FILE_EXTENSION = '.csv';
		
		// array patterns
		const PATTERN_FILES = 'files';
		const PATTERN_CONTENT = 'content';
		const PATTERN_OPERATORS = 'operators';
		const PATTERN_OPERANDS = 'operands';
		const PATTERN_UNIQUE_OPERATORS = 'uniqueOperators';
		const PATTERN_UNIQUE_OPERANDS = 'uniqueOperands';
		const PATTERN_PROGRAM_LENGTH = 'programLength';
		const PATTERN_VOLUME = 'volume';
		const PATTERN_DIFFICULTY = 'difficulty';
		const PATTERN_DIR = 'dir';
		const PATTERN_TEMPLATE = '-template';
		const PATTERN_PATH = 'path';
		const PATTERN_FILENAME = 'filename';
		
		// matching constants
		const HUNDRED_PERCENT = 100;
		const MAX_LEVENSHTEIN = 255; // maximum size of a levenshtein block
		const LEVENSHTEIN_THRESHOLD = 15; // equals 95% similarity in levenshtein block
		const LEVENSHTEIN_MAX_BLOCKS = 3; // more than 3 blocks with 95% similarity will be considered as plagiarism
		
		#################################  CONSTRUCTORS  ################################
		
		private function __construct() {}
		
	}

?>