exec { "apt-update":
    command => "/usr/bin/apt-get update"
}

Exec["apt-update"] -> Package <| |>

Package { ensure => "installed" }

package { "apache2": }
package { "php5": }
package { "php5-cli": }
package { "php5-mysql": }
package { "php5-curl": }
package { "php5-xsl": }
package { "libapache2-mod-php5":}
package { "mysql-server": }
package { "firefox": }
# package { "phpunit": }
package { "openjdk-7-jre": }
package { "graphviz": }
package { "unzip": }
package { "xvfb": }

