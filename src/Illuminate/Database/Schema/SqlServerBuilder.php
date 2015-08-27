<?php namespace Illuminate\Database\Schema;

use Closure;

class SqlServerBuilder extends Builder {

	/**
	 * Create a new command set with a Closure.
	 *
	 * @param  string    $table
	 * @param  \Closure  $callback
	 * @return \Illuminate\Database\Schema\Blueprint
	 */
	protected function createBlueprint($table, Closure $callback = null)
	{
		if (isset($this->resolver))
		{
			return call_user_func($this->resolver, $table, $callback);
		}

		return new SqlServerBlueprint($table, $callback);
	}


}

