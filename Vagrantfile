# vi: ruby
Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/trusty64"
  config.vm.provision :shell, :path => "bootstrap.sh"
  config.vm.network :forwarded_port, host: 1234, guest: 80
end
