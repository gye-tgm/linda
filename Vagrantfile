# vi: ruby
Vagrant.configure("2") do |config|
  config.vm.box = "hashicorp/precise32"
  config.vm.network :forwarded_port, host: 1234, guest: 80
  config.vm.provision "puppet"
  config.vm.provision :shell, :path => "bootstrap.sh"
end
