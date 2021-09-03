FROM rabbitmq:3.8.2-management-alpine

COPY ./rabbitmq.conf /etc/rabbitmq/rabbitmq.conf

ADD init.sh /init.sh
RUN chmod +x /init.sh
EXPOSE 15672

# Define default command
CMD ["/init.sh"]
